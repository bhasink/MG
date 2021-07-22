@extends('layouts.layout')

@section('styles')

    <style>
        .thankyou {
            padding: 3em 6em 3em 6em;
        }
        .btn-failed{
            margin-right: 1em;
            border: 2.2px solid #fed940;
            border-radius: 30px;
            width: auto;
            text-align: center;
            font-size: 1.2em;
            background-color: rgb(254, 206, 0);
            /* margin: 5rem 8px; */
            cursor: pointer;
            color: #000;
            font-weight: initial;
            padding: 1px 1rem;
        }
        .box-rights{
            text-align: end;
        }
        @media screen and (max-width: 768px){
            .thankyou {
                padding: 0;
            }
            .box-rights{
                text-align: left;
            }

        }
    </style>

@endsection
@section('content')

    <section class="container-fluid" >


        <div class="row d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <img style="width: 100%;" src="/images/thank-you-banner.jpg" alt="">
        </div>

        <div class="row d-sm-block d-md-none d-lg-none d-xl-none">
            <img style="width: 100%;" src="/images/thank-you-banner-res.jpg" alt="">
        </div>



    </section>

    <section class="container thankyou">


        @if(isset($data['cancel_data']))

            <h1 class="title-thankyou">  Order has been cancelled!</h1>

            <br><br>

            <p style="text-align: center;">
                That's a bummer! We hope you drop by soon for an awesome gaming session with us.
            </p>

        @endif


            @if(isset($data['get']))

                <h1 class="title-thankyou">  Get Method not Allowed!</h1>

            @endif



        @if(isset($data['payment']))

            @php
            $pay_data = $data['payment']['data'];

            $pay_data = json_decode($pay_data,true);

            @endphp



        <h1 class="title-thankyou">{{$data['check'] ==true?'Success':'Transaction Failed'}}</h1>


        <div class="col-md-12">
            <p class="thankyou-msg">

                @if( $data['check'] ==true)

                    Thank you for booking your experience with us!

                    <!-- Event snippet for SW | MG | Purchase conversion page -->
                    <script>
                        gtag('event', 'conversion', {
                            'send_to': 'AW-399051010/iS6jCMSGlP4BEIKSpL4B',
                            'value': 1.0,
                            'currency': 'INR',
                            'transaction_id': ''
                        });

                        fbq('track', 'Purchase', {value: 0.00, currency: 'INR'});
                    </script>



        @else


                        <p style="text-align: center;">Your Transaction has been failed either due to incorrect card details or gateway timeout!</p>

                <div style="display:flex;justify-content: center;">



                    <a  style="margin-right: 1em;" href="/payment" class="btn btn-success btn-failed">Retry</a>

                    <form method="post" action="/cancel/order">
                        @csrf
                        <button class="btn btn-danger btn-failed" type="submit">Cancel Order</button>
                    </form>

                </div>


                @endif

              </p>

                @if( $data['check'] ==true)


              <div class="thank-you-order" >
                  <div class="container">
                      <div class="row">
                          <div class="col-sm">
                              <span>ORDER ID</span>
                              <h2 style="width: 300px;word-break: break-all;">{{$data['payment']['txnid']}}</h2>

                        </div>
                        {{--<div class="col-sm">--}}
                            {{--<span>PLAYERS</span>--}}
                            {{--<h2>5 X SOL RIDER</h2>--}}
                        {{--</div>--}}
                        <div class="col-sm">
                            <span>Transaction On</span>
                            <h2>{{$pay_data['addedon']}}</h2>
                        </div>
                        <div class="col-sm box-rights">
                            <span>Amount</span>
                            <h2>{{$data['payment']['amount']}}</h2>
                        </div>
                    </div>
                </div>
            </div>

                    <p class="tickts-msg">Check your mail for tickets.</p>
                    
                @endif
        </div>

        @endif

    </section>



@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>

@endsection
