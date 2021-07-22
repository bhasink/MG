@extends('layouts.layout')

@section('styles')

    <!-- Event snippet for SW | MG | Submit lead form conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-399051010/6SJ2CP3xqv4BEIKSpL4B'});
    </script>

    <script>
        fbq('track', 'CompleteRegistration');
    </script>

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

    <h3 style="display: flex; justify-content: center; padding: 4em;">Thankyou! We will get back to you.</h3>
    
@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>

@endsection


