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
            <img style="width: 100%;height: 400px;" src="/images/thank-you-banner.jpg" alt="">
        </div>

        <div class="row d-sm-block d-md-none d-lg-none d-xl-none">
            <img style="width: 100%;height: 400px;" src="/images/thank-you-banner-res.jpg" alt="">
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

                @if( $data['check'] ==true)

                    <br>

                  <p style="text-align: center;">
                      Thank you for booking your experience with us!
                  </p>

                @else

                    <br>
                <p style="text-align: center;">Your Transaction has been failed either due to incorrect card details or gateway timeout!</p>


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
