@extends('layouts.layout')

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>

@endsection
@section('content')
    <div class="hero-text-about">

        <div class="about-banner-content">


        </div>

    </div>

    <section class="container about-us">
        <h1 class="business-title">Combos and Deals</h1>
        <div class="col-md-12">
            <ul class="deals">
                <li>
                    <div class="deals-img">
                        <img style="width: 100%;" src="/images/deals/DEALS-BANNER1.jpg">
                        <h2 class="deals-caption">COMBO FOR 1</h2>
                    </div>

                       <div class="deals-games">

                               <p><span class="name-deals">Virtual Reality Bays</span><span class="time-deals">5 mins</span></p>
                           <p><span class="name-deals">Video Gaming Bays</span><span class="time-deals">5 mins</span></p>
                           <p><span class="name-deals">Car Simulator</span><span class="time-deals">5 mins</span></p>
                           <p><span class="name-deals">360 Chair/Shark</span><span class="time-deals">5 mins</span></p>
                           <p><span class="name-deals">Virtual Reality Bays</span><span class="time-deals">5 mins</span></p>
                       </div>

                    <div class="bottom-deals">
    <span class="deals-price">
        <span class="box-price-deals">
            <p class="price-deals"> MRP ₹ 1600</p>
            <p class="price-deal-dis">Combo price ₹ 1000</p>

        </span>
        <span class="btn-deals-box">
            <a href="#" class="deals-btn">Book Now</a>
        </span>
    </span>
                    </div>

                </li>

                <li>
                    <div class="deals-img">
                        <img style="width: 100%;" src="/images/deals/DEALS-BANNER2.jpg">
                        <h2 class="deals-caption">COMBO FOR 2</h2>
                    </div>

                    <div class="deals-games">

                        <p><span class="name-deals">Virtual Reality Bays</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Video Gaming Bays</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Car Simulator</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">360 Chair/Shark</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Virtual Reality Bays</span><span class="time-deals">5 mins</span></p>
                    </div>

                    <div class="bottom-deals">
    <span class="deals-price">
        <span class="box-price-deals">
            <p class="price-deals"> MRP ₹ 1600</p>
            <p class="price-deal-dis">Combo price ₹ 1000</p>

        </span>
        <span class="btn-deals-box">
            <a href="#" class="deals-btn">Book Now</a>
        </span>
    </span>
                    </div>

                </li>
                <li>
                    <div class="deals-img">
                        <img style="width: 100%;" src="/images/deals/DEALS-BANNER2.jpg">
                        <h2 class="deals-caption">COMBO FOR 2</h2>
                    </div>

                    <div class="deals-games">

                        <p><span class="name-deals">Virtual Reality Bays</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Video Gaming Bays</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Car Simulator</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">360 Chair/Shark</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Virtual Reality Bays</span><span class="time-deals">5 mins</span></p>
                    </div>

                    <div class="bottom-deals">
    <span class="deals-price">
        <span class="box-price-deals">
            <p class="price-deals"> MRP ₹ 1600</p>
            <p class="price-deal-dis">Combo price ₹ 1000</p>

        </span>
        <span class="btn-deals-box">
            <a href="#" class="deals-btn">Book Now</a>
        </span>
    </span>
                    </div>

                </li>
                <li>
                    <div class="deals-img">
                        <img style="width: 100%;" src="/images/deals/DEALS-BANNER2.jpg">
                        <h2 class="deals-caption">COMBO FOR 2</h2>
                    </div>

                    <div class="deals-games">

                        <p><span class="name-deals">Virtual Reality Bays</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Video Gaming Bays</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Car Simulator</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">360 Chair/Shark</span><span class="time-deals">5 mins</span></p>
                        <p><span class="name-deals">Virtual Reality Bays</span><span class="time-deals">5 mins</span></p>
                    </div>

                    <div class="bottom-deals">
    <span class="deals-price">
        <span class="box-price-deals">
            <p class="price-deals"> MRP ₹ 1600</p>
            <p class="price-deal-dis">Combo price ₹ 1000</p>

        </span>
        <span class="btn-deals-box">
            <a href="#" class="deals-btn">Book Now</a>
        </span>
    </span>
                    </div>

                </li>

            </ul>

        </div>

    </section>





@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>



@endsection
