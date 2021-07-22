@extends('layouts.layout')

@section('content')
    <div class="container-fluid ">

        <div class="row d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <img style="width: 100%;" src="/images/sign-reg-banner.jpg" alt="">
        </div>

        <div class="row d-sm-block d-md-none d-lg-none d-xl-none">
            <img style="width: 100%;" src="/images/sign-reg-banner-res.jpg" alt="">
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card sign-up-box">
                    <div class="card-header"><h1 class="signup-title">Contactless Payment</h1></div>

                    @if($token_status == null)

                        @if(isset($check_token))

                        <div class="card-body">

                            <form method="POST" action="/contactless-payment">
                                {{ csrf_field() }}

                                <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="">
                                        <b>Order ID: </b>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <input style="font-weight: bolder;" id="amount" type="text" class="form-control @error('order_id') is-invalid @enderror" placeholder="Order ID*" name="order_id" value="{{ $check_token->order_id }}" readonly autocomplete="order_id" autofocus>

                                    @error('order_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="">
                                        <b>Tranaction ID: </b>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <input style="font-weight: bolder;" id="token" type="text" class="form-control @error('token') is-invalid @enderror" placeholder="Token*" name="order_id" value="{{ $check_token->token }}" readonly autocomplete="token" autofocus>

                                    <input type="hidden" name="token" value="{{$check_token->token}}">

                                    @error('token')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="">
                                        <b>Amount:</b>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <input style="font-weight: bolder;" id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" placeholder="Amount*" name="amount" value="{{$check_token->amount }}" readonly autocomplete="name" autofocus>

                                    @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="">
                                        <b>Name:</b>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <input style="font-weight: bolder;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name*" name="name" required  autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="">
                                        <b>Email ID:</b>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <input style="font-weight: bolder;" id="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email*" name="email" required  autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="">
                                        <b>Mobile No:</b>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <input style="font-weight: bolder;" id="mobile_no" type="text" pattern="[1-9]{1}[0-9]{9}" class="form-control @error('mobile_no') is-invalid @enderror" placeholder="Mobile No*" name="mobile_no"  required  autocomplete="mobile_no" autofocus>

                                    @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn booking-btn-sign">
                                        Pay Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                        @endif

                    @else

                        <div class="card-body">

                            <h3 style="text-align: center;">{{$token_status}}</h3>

                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
