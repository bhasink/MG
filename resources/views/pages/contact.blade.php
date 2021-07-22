@extends('layouts.layout')

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>

@endsection
@section('content')
    <div class="hero-text-contact">

        <div class="about-banner-content">

        </div>

    </div>

    <section class="container about-us">

        <div class="col-md-12">
<h1 class="contact-us-title">Contact Us</h1>
        </div>
        <div class="row address-box">
            <div class="col-sm-4 contact-us-address">
                <p class="address-title">DROP US A NOTE</p>
                <p>Or call us at:</p>
                <p>011-9999 9999</p>
                <p class="address-title">OTHER INQUIRIES</p>
                <p>sales@microgravity.com</p>
                <p>support@microgravity.com</p>
                <p>marketing@microgravity.com</p>
                <p>events@microgravity.com</p>

            </div>
            <div class="col-sm-8">  <form class="form-inline" action="/action_page.php">
                    <div class="row row-cols-1 form-box">
                        <div class="col">
                            <input type="name" class="form-control" id="name" placeholder="FULL NAME*" name="name"></div>
                        <div class="col">
                            <input type="email" class="form-control" id="email" placeholder="EMAIL*" name="email"></div>
                        <div class="col">
                            <input type="number" class="form-control" id="phone" placeholder="PHONE*" name="phone"></div>
                        <div class="col message-box"><textarea name="message" id="message" cols="20" rows="3" class="form-control" placeholder="MESSAGE*"></textarea></div>
                    </div>

                    <button class="btn know-more sub-btn btn-submit contact-btn-submit">SUBMIT</button>
                </form></div>
        </div>

    </section>



@endsection

@section('script')
    <script>
            if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');
    </script>
@endsection
