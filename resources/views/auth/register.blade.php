@extends('layouts.layout')

@section('content')
<div class="container-fluid ">
    {{--frm-margin --}}
    {{--{{dd(session()->all())}}--}}

    <div class="row d-none d-sm-none d-md-block d-lg-block d-xl-block">
        <img style="width: 100%;" src="/images/sign-reg-banner.jpg" alt="">
    </div>

    <div class="row d-sm-block d-md-none d-lg-none d-xl-none">
        <img style="width: 100%;" src="/images/sign-reg-banner-res.jpg" alt="">
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card sign-up-box">
                <div class="card-header"><h1 class="signup-title">Sign Up</h1></div>
                <div><p class="new-user">Existing user? <a href="/login"> Sign In</a> </p></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="NAME*" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" PLACEHOLDER="PHONE NUMBER*" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" PLACEHOLDER="EMAIL ADDRESS*" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" placeholder="DOB*" name="dob" value="{{ old('dob') }}" required autocomplete="name" autofocus>

                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="City*" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" PLACEHOLDER="PASSWORD*" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="CONFIRM PASSWORD*" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">

                                <div CLASS="check-box-sigup" >
                                    <input  type="checkbox" style="margin-top: 3px;">
                                    <label>I want to recieve news and special offer by email.</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn booking-btn-sign">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
