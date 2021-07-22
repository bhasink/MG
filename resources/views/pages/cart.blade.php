@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
    <style>
        .statistics li span:hover{
            cursor: pointer;
        }
        .loading{
            width: 100%;
            height: 100%;
            display: flex;
            position: fixed;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999999;
            top: 0;
        }

        .loading div{
            text-align: center;
            margin-top: 1em;
        }

        .loading p{
            color: #ffffff;
            font-size: 1.5em;
            padding: 0em 1em 0em 1em;
            font-weight: 700;
            margin: 0;
        }
    </style>

@endsection
@section('content')

    <div class="loading" style="visibility: hidden;">

        <div>
            <img src="/images/loading.gif" alt="" />
            <p style="color: #ffffff;margin-top: 1rem;">Removing product from cart... .. .</p>
        </div>

    </div>

    <section class="container cart-main">

        <div class="col-md-12">
            <h1 class="cart-title">YOUR CART</h1>
        </div>

    </section>

    @php
    @endphp

    @if(session('game_cart'))

    <section class="cart-page" id="cart-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <?php
                            $total_price=0;
                            $get_dates = [];
                        ?>

                        @foreach(session('game_cart') as $key1 => $game_cart_details)

                                @php
                                    $game_name= $game_cart_details['game_name'];
                                    $game_name = json_decode($game_name,true);
                                    $slot_data = json_decode($game_cart_details['slot_data'],true);
                                    $play_time = explode(' ',$slot_data['mg_name']);
                                    $total_price += $game_cart_details['slot_cost'];
                                    $get_dates[] =\Carbon\Carbon::parse($game_cart_details['play_date'])->timestamp;
                                $slot_guid = explode(' ',$slot_data['mg_slotitemsid']);                                              $mg_store_value = explode(' ',$slot_data['_mg_store_value']);
                                $tot_player = $game_cart_details['total_player'];
                                @endphp

                    <ul class="statistics">


                        <li>
                            @if($game_name['ProductFamily'] =='GOLF')

                                <img style="width: 100%;height: 100%;" src="/images/golf-cart.jpg">

                            @else

                                <img style="width: 100%;height: 100%;" src="/images/{{$game_name['ThumbnailImage']}}">

                            @endif
                        </li>

                        <li class="cart-details">
                            <p>Players</p>
                            <p><span>{{$game_name['ProductFamily'] =='GOLF' ? isset($game_cart_details['product_type_name']) ? $game_cart_details['product_type_name'] : null : $game_cart_details['total_player'].' x '.$game_name['SubProductName']}}</span></p>
                            <p>Date</p>
                            <p><span>{{$game_cart_details['play_date']}} </span></p>

                            @if($game_name['ProductFamily'] =='GOLF')
                                <div>
                                @foreach($game_cart_details['slot_array'] as $key=>$value)


                                    <b style="display: inline;">Slot:</b>    {{\Carbon\Carbon::parse($value['start_time'])->format('H:i')}} - {{\Carbon\Carbon::parse($value['end_time'])->format('H:i')}}

                                @endforeach
                                </div>
                                @else

                                {{$play_time[0]}}

                            @endif
                        </li>

                        <li class="cart-price-box">

                            <span class="remove-btn remove-from-cart" data-id="{{$key1}}" data-guid="{{$slot_guid[0]}}" data-store="{{$mg_store_value[0]}}" data-totp="{{$tot_player}}">x</span>
                            <span class="cost-mob">&#8377; {{$game_cart_details['slot_cost']}}</span>
                        </li>
                    </ul>

                        @endforeach



                </div>

            </div> <!--row ends here-->
            <div class="row total-box">
                <div style="text-align: left;" class="col-8">
                    <p>TOTAL AMOUNT</p>
                </div>
                <div style="text-align: right;" class="col-4">
                    <p>&#8377; {{ $total_price ?? '' }}</p>
                </div>
            </div>



            @if (Auth::check())
                <a href="/wavier-tc" class="btn cart-page-btn" id="checkout">CHECKOUT</a>
            @else
                <a href="/register" class="btn cart-page-btn" id="checkout">CHECKOUT</a>
            @endif

        </div>  <!--container ends here-->
    </section>

    @else

        <h3 style="text-align: center; padding: 50px;">
            Cart is Empty!
        </h3>

    @endif

@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');
    </script>

    <script>

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), slot_guid: ele.attr("data-guid"), data_store: ele.attr("data-store"), data_tot_p: ele.attr("data-totp")},
                    beforeSend: function() {
                        $('.loading').css('visibility', 'initial');

                    },
                    complete: function() {
                        $('.loading').css('visibility', 'hidden');

                        $('.wait').remove();
                    },
                    success: function (response) {
                        console.log(response);
                        window.location.reload();
                    }
                });
            }
        });

    </script>

    @if(isset($get_dates))

        @if(count(array_unique($get_dates)) !== 1)

            <script>

                $('#checkout').on("click", function (e) {
                    e.preventDefault();
                    $('#checkout').attr('disabled', true);
                    alert('Please select all the games of same dates!');
                });

            </script>

        @endif

    @endif

@endsection
