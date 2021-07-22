@extends('layouts.layout')

@section('styles')

    <style>
        .thankyou {
            padding: 3em 6em 3em 6em;
        }

        @media screen and (max-width: 768px){
            .thankyou {
                padding: 0;
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




            {{--@if(isset($message))--}}
            <h1 class="title-thankyou">
                Response
            </h1>


            <div class="col-md-12">


                    @if(isset($message))

                        <p class="thankyou-msg">

                            {{$message}}!

                        </p>

                    @endif

            </div>

    </section>

@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>

@endsection
