@extends('layouts.layout')

@section('styles')
    <link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css?ver=5.3.2" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/godgamers.css?v=16"/>

    <style>
        section.topbannermain {
            height: 550px;
            position: relative;
            overflow: hidden;
        }

        .gtxtblk{
            text-align: center;
            color: #ffffff;
            margin-top: 13.2em;
        }

        @media only screen and (max-device-width: 768px){

            .gtxtblk{
                text-align: center;
                color: unset;
                margin-top: 14.5em;
            }

        }

    </style>

@endsection
@section('content')


    <section class="topbannermain">
        <img src="./images//godgamers/Banner-Maingodness.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                </div>

                <div class="col-lg-5 col-md-5">

                    <div class="gtxtblk">
                        <p>Congratulations, You're now a part of the Gamer Goddesses Clan! </p>
                        <p>Thank you for your support.</p>
                        <p>Don't forget to follow our handles to complete the registration process:</p>
                        <p>
                            Instagram: <a target="_blank" href="https://instagram.com/microgravityind">@microgravityind</a> <br>
                            Facebook: <a target="_blank" href="https://www.facebook.com/MicrogravityIND">Microgravity India </a>
                        </p>
                    </div>

                </div>

            </div>
        </div>

    </section>




@endsection

@section('script')


@endsection