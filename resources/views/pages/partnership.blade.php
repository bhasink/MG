@extends('layouts.layout')

@section('styles')

<title>Our Partners | Microgrvity</title>
 <meta property="og:title" content="Our Partners | Microgrvity"> 
 <meta name="description" content="Check out the list of all the partners & associates who helped us through our journey.">
    <meta property="og:description" content="Check out the list of all the partners & associates who helped us through our journey."> 
	
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>

 
    <style>
        .business-title:after{
            display: none;
        }

        
        .cp{
            text-align: center;
        }

        .bd-placeholder-img.card-img-top {
            border-bottom: 5px solid red;
        }

        .card {
            background: blue;
            color: #ffffff;
            margin-top: 2em;
            align-items: center;
            padding: 48px 0 0 0;
        }

        .crow{
            padding: 4em 0 4em 0;
        }

        @media screen and (max-width: 768px) {
            .crow {
                width: unset;
                padding: 1em;
            }
        }


        .card-title {
            align-items: center;
            justify-content: center;
            text-align: center;
            text-transform: uppercase;
            font-weight: 800;
        }

        .card-text {
            text-align: center;
        }

        .card-hr{
            background-color: #ffffff;
            border-top: 2px solid rgba(0, 0, 0, 0.1);
        }

        .cen{
            text-transform: uppercase;
            text-align: center;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            display: flex;
            font-weight: 100;
            font-size: 1.1em;
        }

    </style>

@endsection
@section('content')
    <div class="hero-text-p blend-blue-light" style="justify-content: flex-end;
    padding-bottom:10px;">
        <h1 class="business-title">Our Partners</h1>

    </div>

    <div class="row crow" style="width: 100%;">


        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10">
            <div class="row space-16">&nbsp;</div>
            <p class="cp">
                We would like to thank our partners, this wouldn't have worked out without you all!
                Here is a list of our supporters and trustworthy associates who helped us through our journey to bring the future of entertainment to the city.
            </p>

            <div class="row">

                <div class="pitem">
                    <ul>
                        <!-- <li>
                            <img src="/images/partnership/logos-10.png" alt="">
                        </li> -->
                        <li>
                            <img src="/images/partnership/logos-11.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logos-12.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logos-13.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logos-14.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logos-15.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logos-16.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logos-17.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logos-18.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logos-19.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logo-20.png" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logo-21.jpg" alt="">
                        </li>
                        <li>
                            <img src="/images/partnership/logo-22.jpg" alt="">
                        </li>
                    </ul>
                </div>
                

            </div>
            <div class="col-md-1">&nbsp;</div>
        </div>
    </div>


@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.testimonials').slick({
                infinite: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,

                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            arrows: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots:true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }

                ]

            });

        });

    </script>


@endsection
