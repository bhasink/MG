@extends('layouts.layout')

@section('content')
    <div class="container-fluid ">

        <div class="row">
            <img style="width: 100%;" src="/images/sign-reg-banner.jpg" alt="">
        </div>

        {{--    {{dd(session()->all())}}--}}

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card sign-up-box">
                    <div class="card-header"><h1 class="signup-title">{{ __('Sign In') }}</h1></div>
                    {{--<div><p class="new-user">New user? <a href="/register"> Sign up</a> </p></div>--}}
                    <div class="card-body">
                        <form method="POST" action="/blogin">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="EMAIL ADDRESS*" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="PASSWORD*" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 check-box-sigup sigup-main">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Keep me Signed in') }}
                                        </label>
                                    </div>
                                </div>

                                @if (Route::has('password.request'))
                                    <div class="col-md-6 check-box-sigup-forget">
                                        <a class="btn-link" href="/forget-password">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    </div>
                                @endif

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn booking-btn-sign">
                                        {{ __('SIGN IN') }}
                                    </button>

                                    <p style="text-align: center;margin:0px 8px 20px 8px;">Sign up only on booking a game</p>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
