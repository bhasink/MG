@extends('layouts.layout')

@section('styles')

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="/css/reating/demo/styles.css"/>

    <style>
        .col.selectable input {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 80%;
            height: 100%;
            padding: 1px;
            border: none;
            pointer-events: none;
            border-radius: 35px !important;
            padding-left: 16px;
            background-color: #ee100f;
            color: #ffffff;
            font-size: 1.2em;
        }
        .br-theme-bars-pill .br-widget a {
            padding: 15px 15px;
            text-decoration: none;
            margin-left: .3em;
            line-height: 3;
            width: 31px;
            height: 18px;
            text-align: center;
            background-image: url(/css/reating/img/star-empty.svg);
            background-size: 100%;
            background-repeat: no-repeat;
            font-weight: 400;
        }
        .br-theme-bars-pill .br-readonly a {
            cursor: default;
            background-image: url(/css/reating/img/star-full.svg);
            background-size: 50%;
        }
        .br-theme-bars-pill .br-widget a.br-active,
        .br-theme-bars-pill .br-widget a.br-selected {
            background-image: url(/css/reating/img/star-full.svg);
            background-size: 100%;
            color: white;
        }
        .booking-player-box {
            margin-top: 1.5rem;
        }
        .bookp{
            margin: 2em 0 0 0;
            font-size: 1.2em;
        }
        .booking-slot li {
            max-width: 100%;
        }
        .sel-block{
            display: flex;
        }
        .slots-sel{
            background-image: url(/css/reating/img/star-full.svg);
            width: 34px;
            height: 34px;
            background-repeat: no-repeat;
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
        .loading2{
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
        .loading2 div{
            text-align: center;
            margin-top: 1em;
        }

        .loading2 p{
            color: #ffffff;
            font-size: 1.5em;
            padding: 0em 1em 0em 1em;
            font-weight: 700;
            margin: 0;
        }

    </style>

@endsection
@section('content')
    <div class="hero-text-booking">
    </div>

    <div class="loading" style="visibility: hidden;">

        <div>
            <img src="/images/loading.gif" alt="" />
            <p style="color: #ffffff;margin-top: 1rem;">Your booking is under process... .. .</p>
        </div>

    </div>

    <div class="loading2" style="visibility: hidden;">

        <div>
            <img src="/images/loading.gif" alt="" />
            <p style="color: #ffffff;margin-top: 1rem;">Fetching Price... .. .</p>
        </div>

    </div>

    <section class="container about-us-booking">

        <div class="col-md-12">
                <div class="row booking-form">
                    <div class="col selectable mob-select">
                        <select id="gamename" class="form-control" onchange="return ApplyFiltersGD('game');">

                            @if($data['get_all_games'] != null)

                                @foreach($data['get_all_games'] as $key=>$get_all_games)
                                    <option value="{{json_encode($get_all_games)}}" {{$get_all_games->SubProductGUID == $data['SubProductGUID'] ? 'selected' :''}}>{{$get_all_games->SubProductName}}</option>
                                @endforeach

                            @endif

                        </select>

                        <input type="text" id="gni" name="gamename" value="" />

                    </div>
                    <div class="col">

                        <?php

                        $get_date = explode(' ',$data['date'])

                        ?>

                        <input placeholder="DOB" id="gdate" type="date" class="form-control c-date"   name="dob" value="{{$get_date[0]}}" required="required" autofocus="" onchange="return ApplyFiltersGD('date');">
                    </div>
                </div>
        </div>
        <div id="scroll-box">

            <div id="slots-data">
                <div id="scroll-box-tab" class="col-md-12  booking-player-box">

                    @if($data['slot_data'] != null)

                        <?php
                            $count_row = 1;
                        ?>

                        @foreach($data['slot_data'] as $key => $slot_data)

                            <?php

                                $get_time = explode(' ',$slot_data->mg_name);
                                $get_time = explode('-',$get_time[0]);
                                $get_time_diff1 = explode(':',$get_time[0]);
                                $get_time_diff2 = explode(':',$get_time[1]);
                                $get_time = $get_time_diff2[1]-$get_time_diff1[1];
                            ?>
                            @if($slot_data->_mg_subproduct_value !=null && $data['SubProductGUID'] == $slot_data->_mg_subproduct_value )

                            <ul class="booking-slot star-border-left">
                                <li class="booking-time">
                                    <p>
                                        <?php
                                            $slot_time  = explode(" ",$slot_data->mg_name);
                                        ?>

                                        {{$slot_time[0]}}
                                    </p>
                                </li>

                                <li>

                                    <section class="section" id="section-1">
                                        <form class="form-1">
                                            <div class="form-field" style="display: flex;">

                                                <div class="sel-block">
                                                    @for($i = 1; $i<= $slot_data->mg_playersbooked+$slot_data->mg_playersbookingunderprocess;$i++)
                                                        <div data-toggle="tooltip" title="Booked Slot!" class="slots-sel" ></div>
                                                    @endfor
                                                </div>

                                            <select id="star-rating{{$key}}"  class="example-pill" name="rating" autocomplete="off" onchange="return ApplyFilters({{json_encode($slot_data)}},this.id,{{json_encode($data['$get_sub_product_family'])}});">
                                                    @for($j = 1; $j<= $slot_data->mg_maximumplayersallowed;$j++)
                                                        <option value="{{$j}}">player {{$j}}</option>
                                                    @endfor
                                                </select>
                                            </div>

                                        </form></section>

                                </li>

                            </ul>

                            @endif

                                @if($slot_data->_mg_subproduct_value !=null && $data['GameDuration']==$get_time && $data['SubProductGUID'] != $slot_data->_mg_subproduct_value)

                                    <?php
                                    $count_row++;
                                    ?>

                                    @if($count_row ==1)
                                        <h3>No Slots Available!</h3>
                                    @endif

                                @endif

                            @if($slot_data->_mg_subproduct_value ==null)


                                    <ul class="booking-slot star-border-left">
                                        <li class="booking-time">
                                            <p>
                                                <?php

                                                $slot_time  = explode(" ",$slot_data->mg_name);

                                                ?>

                                                {{$slot_time[0]}}
                                            </p>
                                        </li>

                                        <li>

                                            <section class="section" id="section-1">
                                                <form class="form-1">
                                                    <div class="form-field">

                                                        <select id="star-rating{{$key}}" class="star-rating" onchange="return ApplyFilters({{json_encode($slot_data)}},this.id,{{json_encode($data['$get_sub_product_family'])}});">
                                                            <option value="">Loading slots…</option>

                                                            @for($i = 1; $i<= $slot_data->mg_playersbooked+$slot_data->mg_playersbookingunderprocess;$i++)
                                                                <option readonly="" value="{{$i}}" selected="selected">player {{$i}}</option>
                                                            @endfor

                                                            @for($j = 1; $j<= $slot_data->mg_maximumplayersallowed;$j++)
                                                                <option value="{{$j}}">player {{$j}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>

                                                </form></section>

                                        </li>

                                    </ul>

                                @endif

                        @endforeach

                    @else

                        <h3>No Slots Available!</h3>

                    @endif

                </div>
            </div>
        </div>

        <div class="text-center">

            @if($data['slot_data'] != null)
                <div style="display: flex;text-align: center;justify-content: center;">
                    <a href="" style="width: 30%;" class="btn booking-btn" id="add-to-cart">Add to cart</a>
                    <a href="#" style="width: 30%;" class="btn booking-btn" id="checkout">Checkout</a>
                </div>
            @endif
        </div>

    </section>

    <div class="result-booking" >
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <span>PLAYERS</span>
                    <h2 id="slot-player">-</h2>
                    <input type="hidden" id="total_player">
                    <input type="hidden" id="slot_object">

                </div>
                <div class="col-sm">
                    <span>TIMINGS</span>
                    <h2 id="slot-timing">-</h2>
                </div>
                <div class="col-sm">
                    <span>TOTAL</span>
                    <h2>&#x20B9;&nbsp;<span id="slot-cost">-</span></h2>
                </div>
            </div>
        </div>
    </div>



    <div class="modal" tabindex="-1" role="dialog" id="mdl">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body" style="text-align: center;">
                    <p style="font-size: 1.4em;">Active booking is under progress.</p>
                </div>
                <div class="modal-footer">

                    <form method="post" action="/cancel/order/data">
                        @csrf
                        <button class="btn btn-success btn-failed1 btn-d" type="submit">Cancel Order</button>
                    </form>


                    <a  style="margin-right: 1em;" href="/wavier-tc" class="btn btn-success btn-failed1">Proceed to booking</a>


                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>

    <script src="/js/br.js"></script>
    <script src="/css/reating/src/star-rating.js?ver=3.1.5"></script>
    <script>
        var destroyed = false;
        var starratings = new StarRating( '.star-rating', {
            onClick: function( el ) {
                console.log( 'Selected: ' + el[el.selectedIndex].text );
            },
        });
        document.querySelector( '.toggle-star-rating' ).addEventListener( 'click', function() {
            if( !destroyed ) {
                starratings.destroy();
                destroyed = true;
            }
            else {
                starratings.rebuild();
                destroyed = false;
            }
        });

        $('.star-rating0').click(function(){
            alert('test');
        });

    </script>

    <script>
        if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');
    </script>

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var isFilterApplied = false;
        var ApplyFilters = function(slot_data,element_id,s_p_family){

            $(".br-widget a").not($(this))
                .removeClass('br-selected');

            isFilterApplied = true;

            var total_player  = document.getElementById(element_id);
            total_player = total_player.options[total_player.selectedIndex].value;

            $("#slot-cost").html('-');
            $("#slot-player").html('-');
            $("#slot-timing").html('-');

            $.ajax({
                    type:'POST',
                    url:'/get-price',
                    data:{slot_data:slot_data,total_player:total_player,sub_product_family:s_p_family},
                    success:function(data){
                        $("#slot-cost").html(data.slot_amount);
                        $("#slot-player").html(data.total_player+'x'+data.SubProductName);
                        $("#slot-timing").html(data.slot_date+'<br> '+data.slot_time);
                        $("#total_player").val(data.total_player);
                        $("#slot_object").val(JSON.stringify(slot_data));
                    }, beforeSend: function() {
                    $('.loading2').css('visibility', 'initial');
                },
                complete: function() {
                    $('.loading2').css('visibility', 'hidden');
                },
            });
        }

        function ApplyFiltersGD(filtertype) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var game_name = document.getElementById("gamename");
            game_name = game_name.options[game_name.selectedIndex].value;
            game_name = JSON.parse(game_name);

            var SubProductGUID = game_name.SubProductGUID;
            var ProductFamilyGUID = game_name.ProductFamilyGUID;
            var StoreGUID = game_name.StoreGUID;

            if (filtertype == "date") {
                var play_date = document.getElementById("gdate");
                play_date = play_date.value;
                play_date = play_date+ " 00:00:00";
            }else{
                var play_date = $('.c-date').val();
            }

            var url_data = '/booking/'+SubProductGUID+'/'+ProductFamilyGUID+'/'+StoreGUID+'/'+play_date;

            $.ajax({
                type:'GET',
                url:url_data,
                data:{SubProductGUID:SubProductGUID, ProductFamilyGUID:ProductFamilyGUID, StoreGUID:StoreGUID},
                success:function(response){
                    document.getElementById('slots-data').innerHTML = response;
                    window.history.pushState("Microgravity", "Details",url_data);
                },
                complete: function() {

                    $.getScript("https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js", function() {
                        location.reload(true);
                    });
                }
            });
        }

    </script>

    <script>

        $('#add-to-cart').click(function (e) {

            e.preventDefault();

            var total_player  = document.getElementById('total_player');
            total_player = total_player.value;

            if(total_player != ""){
                $('#add-to-cart').prop('disabled', false);
            }
            else{
                $('#add-to-cart').prop('disabled', true);
                alert('Please Select Players!');
                return false;
            }

            var slot_object  = document.getElementById('slot_object');
            slot_object = slot_object.value;
            var parse_slot_object = $.parseJSON(slot_object);
            var mg_slotitemsid = parse_slot_object['mg_slotitemsid'];
            var mg_store_value = parse_slot_object['_mg_store_value'];
            var slot_cost  = document.getElementById('slot-cost');
            slot_cost = slot_cost.innerHTML;
            var game_name = document.getElementById("gamename");
            game_name = game_name.options[game_name.selectedIndex].value;
            var play_date = document.getElementById("gdate");
            play_date = play_date.value;

            fbq('track', 'AddToCart');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type:'POST',
                url:'/cart',
                data:{slot_cost:slot_cost,slot_data:slot_object,total_player:total_player,game_name:game_name,play_date:play_date,mg_slotitemsid:mg_slotitemsid,mg_store_value:mg_store_value},
                beforeSend: function() {
                    $('#add-to-cart').attr('disabled', true);
                    $('.loading').css('visibility', 'initial');

                },
                complete: function() {
                    $('#add-to-cart').attr('disabled', false);
                    $('.loading').css('visibility', 'hidden');

                    $('.wait').remove();
                },
                success:function(data){
                    window.location = "/cart";
                }
            });
        });

    </script>

    <script>

        $('#checkout').click(function (e) {
            e.preventDefault();

            var total_player  = document.getElementById('total_player');
            total_player = total_player.value;

            if(total_player != ""){
                $('#add-to-cart').prop('disabled', false);
            }
            else{
                $('#add-to-cart').prop('disabled', true);
                alert('Please Select Players!');
                return false;
            }

            var slot_object  = document.getElementById('slot_object');
            slot_object = slot_object.value;
            var parse_slot_object = $.parseJSON(slot_object);
            var mg_slotitemsid = parse_slot_object['mg_slotitemsid'];
            var mg_store_value = parse_slot_object['_mg_store_value'];
            var slot_cost  = document.getElementById('slot-cost');
            slot_cost = slot_cost.innerHTML;
            var game_name = document.getElementById("gamename");
            game_name = game_name.options[game_name.selectedIndex].value;
            var play_date = document.getElementById("gdate");
            play_date = play_date.value;

            fbq('track', 'InitiateCheckout');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type:'POST',
                url:'/checkout',
                data:{slot_cost:slot_cost,slot_data:slot_object,total_player:total_player,game_name:game_name,play_date:play_date,mg_slotitemsid:mg_slotitemsid,mg_store_value:mg_store_value},
                beforeSend: function() {
                    $('#checkout').attr('disabled', true);
                    $('.loading').css('visibility', 'initial');

                },
                complete: function() {
                    $('#checkout').attr('disabled', false);
                    $('.loading').css('visibility', 'hidden');

                    $('.wait').remove();
                },
                success:function(data){
                    window.location = "/wavier-tc";
                }

            });

        });

    </script>

    <script>
        (function() {
            document.querySelector('select').addEventListener('change', function(e) {
                var val = e.target.options[ e.target.selectedIndex ].text.split('(');
                console.log(val);
                if (val[0].length > 10) {
                    val[0] = val[0].slice(0, 25) + '...';
                    console.log(val.join('('));
                }
                e.target.nextElementSibling.value = val.join('(');
            });

            var game_name = document.getElementById("gamename");
            var gni = document.getElementById("gni");
            game_name = game_name.options[game_name.selectedIndex].text;

            gni.value = game_name;
        })();

    </script>


    <script>
        $(function() {
            function ratingEnable() {

                $('.example-pill').barrating('show', {
                    theme: 'bars-pill',
                    initialRating: ['10'],
                    showValues: false,
                    showSelectedRating: false,
                    allowEmpty: true,
                    emptyValue: '',
                    onSelect: function(value, text) {
                    }
                });

            }

            function ratingDisable() {
                $('select').barrating('destroy');
            }

            $('.rating-enable').click(function(event) {
                event.preventDefault();

                ratingEnable();

                $(this).addClass('deactivated');
                $('.rating-disable').removeClass('deactivated');
            });

            $('.rating-disable').click(function(event) {
                event.preventDefault();

                ratingDisable();

                $(this).addClass('deactivated');
                $('.rating-enable').removeClass('deactivated');
            });

            ratingEnable();
        });


    </script>

    <script>
        $(document).ready(function(){
            $('.br-widget').find('a').each(function(index) {
                $(this).prop('title', 'Available Slot!');
                $(this).attr('data-toggle', 'tooltip');
            });

            $('[data-toggle="tooltip"]').tooltip({
                placement: function(context, source) {
                    var position = $(source).position();

                    if (position.left > 220) {
                        return "left";
                    }

                    if (position.left < 220) {
                        return "right";
                    }
                }
            });

        });

    </script>

@endsection
