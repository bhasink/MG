@extends('layouts.layout')

@section('styles')

    <style>

        nav, .topnav{
            display: none !important;
        }

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

        .btn-d:hover {
            color: #fff;
            background-color: red;
            border-color: red;
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

    @php
       $order =  session('create_order');
        if ($order == null){
          echo "<script>window.location = '/';</script>";
          exit;
        }
    @endphp

    <section class="container-fluid" >


        <div class="row d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <img style="width: 100%;height: 400px;" src="/images/thank-you-banner.jpg" alt="">
        </div>

        <div class="row d-sm-block d-md-none d-lg-none d-xl-none">
            <img style="width: 100%;height: 400px;" src="/images/thank-you-banner-res.jpg" alt="">
        </div>



    </section>

    <section class="container thankyou">


            <h1 class="title-thankyou">Order</h1>


            <div class="col-md-12">
                <p class="thankyou-msg">

                    An intense gaming experience awaits you

                    </p>



                        <div class="thank-you-order" >
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <span>ORDER ID</span>
                                        <h2 style="width: 300px;word-break: break-all;">{{$order->OrderID}}</h2>

                                    </div>

                                    <div class="col-sm">
                                        <span>Base Amount</span>
                                        <h2>{{$order->BaseAmount}}</h2>
                                    </div>
                                    <div class="col-sm box-rights">
                                        <span>CGST</span>
                                        <h2>{{$order->CGST}}</h2>
                                    </div>

                                    <div class="col-sm box-rights">
                                        <span>SGST</span>
                                        <h2>{{$order->SGST}}</h2>
                                    </div>


                                    <div class="col-sm box-rights">
                                        <span>Total Amount</span>
                                        <h2>{{$order->TotalAmountInclTax}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div style="display:flex;justify-content: center;margin-top: 2em;">




                            <form method="post" action="/cancel/order">
                                {{ csrf_field() }}
                                <button class="btn btn-success btn-failed btn-d" type="submit">Cancel Order</button>
                            </form>

                            <a  style="margin-right: 1em;" href="/payment" class="btn btn-success btn-failed">Pay Now</a>

                        </div>

            </div>

    </section>


@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>

@endsection
