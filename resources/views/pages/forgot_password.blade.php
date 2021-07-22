@extends('layouts.layout')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <img style="width: 100%;" src="/images/sign-reg-banner.jpg" alt="">
        </div>

        <div class="row justify-content-center" style="margin:4em;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <br>

                    <p id="rpss"></p>

                    <div id="fblk" class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form>
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile_no" type="text" class="form-control" name="mobile_no"  required autofocus>

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="btn_sub" type="submit" class="btn" style="background: #fece00;">
                                        {{ __('Send OTP') }}
                                    </button>

                                    <div class="tim" style="display: none;">Time left = <span id="timer"></span></div>

                                    <br>

                                </div>

                                <div class="col-md-6 offset-md-4">

                                <input style="display:none;" id="mainotp" class="form-control" required="" name="mainotp" placeholder="OTP*" type="text" >

                                    <br>

                                <input style="display:none;background: #fece00;" value="Verify OTP" id="verifyotp" class="btn" type="button" name="submit2">

                                </div>

                            </div>
                        </form>
                    </div>

                    <div style="display: none;" id="sblk" class="card-body">

                        <form>
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="password"  required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="confirm_password" type="text" class="form-control" name="confirm_password"  required autofocus>

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="reset_password" type="submit" class="btn" style="background: #fece00;">
                                        {{ __('Reset') }}
                                    </button>

                                </div>

                            </div>
                        </form>
                    </div>

                    <div style="display: none;" id="tblk" class="card-body">


                        <h4 style="text-align: center;">Password has been reset successfully!</h4>
                        <br>

                        <div style="display: flex;width:100%;margin: 0 auto;justify-content: center;">
                        <a style="text-align: center; background: #fece00;" class="btn" href="/blogin">Login</a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')


    <script>

        if(navigator.userAgent.indexOf('Mac') > 0) {
            $('body').addClass('mac-os');
        }
        if(navigator.userAgent.indexOf('Safari') > 0) {
            $('body').addClass('safari');
        }
        if(navigator.userAgent.indexOf('Chrome') > 0) {
            $('body').addClass('chrome');
        }

    </script>

    <script>

        $("#btn_sub").click(function(e) {

            e.preventDefault();

            var mobile_no = $('#mobile_no').val();

            if (mobile_no == "") {
                alert('Please enter the mobile number!');
                $('#mobile_no').focus();
                return false;
            }

            if (!$.isNumeric(mobile_no)) {
                alert('Mobile number must be numeric!');
                $('#mobile_no').focus();
                return false;
            }


            if (mobile_no.length < 10 || mobile_no.length > 10) {
                alert('Mobile number must be of 10 digit!');
                $('#mobile_no').focus();
                return false;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                "headers": {
                    "accept": "application/json",
                    "Access-Control-Allow-Origin":"*"
                },
                type:"POST",
                url: '/forgot-password',
                data: {"mobile_no": mobile_no},
                cache:false,
                crossDomain: true,
                "async": true,
                success:function(data){

                    if (data == 'success'){
                        alert('Please check your phone for the OTP And Wait for OTP & type OTP for proceed');
                        $("#btn_sub").html('Resend OTP');
                        $("#mobile_no").attr("disabled", true);

                        $('#verifyotp').css('display','block');
                        $('.divblk').css('display','flex');
                        $('.divblk input').css('margin','2px');
                        $('#otppp').val(data['otp']);
                        $('#mainotp').css('display','block');

                        disableResendtimerotp();
                        timerotp(120);


                    }else{

                        alert(data);

                    }

                },
                error:function (){}
            });


        });


        function disableResendtimerotp()
        {
            $("#btn_sub").attr("disabled", true);
            $(".tim").css("display","block");



            //$('.regenerateOTP').prop('disabled', true);
            setTimeout(function() {
                // enable click after 1 second
                $('#btn_sub').removeAttr("disabled");
                $(".tim").css("display","none");
                //$('.disable-btn').prop('disabled', false);
            }, 60000*2); // 1 second delay
        }


        let timerOn = true;

        function timerotp(remaining) {
            var m = Math.floor(remaining / 60);
            var s = remaining % 60;

            m = m < 10 ? '0' + m : m;
            s = s < 10 ? '0' + s : s;
            document.getElementById('timer').innerHTML = m + ':' + s;
            remaining -= 1;

            if(remaining >= 0 && timerOn) {
                setTimeout(function() {
                    timerotp(remaining);
                }, 1000);
                return;
            }

            if(!timerOn) {
                // Do validate stuff here
                return;
            }
        }


        $("#verifyotp").click(function(e) {
            e.preventDefault();

            var mainotp = $('#mainotp').val();
            var mobile_no = $('#mobile_no').val();


            if (mainotp== "") {
                $('#mainotp').css('border', '1px solid #ff363a');
                $('#mainotp').focus();
                return false;
            }else{
                $('#mainotp').css('border', '1px solid #ccc');
            }


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                "headers": {
                    "accept": "application/json",
                    "Access-Control-Allow-Origin":"*"
                },
                type:"POST",
                url: '/verify-otp',
                data: {"mobile_no": mobile_no,"mainotp":mainotp},
                cache:false,
                crossDomain: true,
                "async": true,
                success:function(data){

                    if (data == 'success'){

                        $('#fblk').css('display','none');
                        $('#sblk').css('display','block');

                    }else{

                        alert(data);

                    }

                },
                error:function (){}
            });

        });


        $("#reset_password").click(function(e) {
            e.preventDefault();

            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();
            var mobile_no = $('#mobile_no').val();

            if (password == "") {
                alert('Please enter the password!');
                $('#password').focus();
                return false;
            }

            if (password.length < 8) {
                alert('Minimum password length must be of eight character!');
                $('#password').focus();
                return false;
            }

            if (confirm_password == "") {
                alert('Please enter the confirm password!');
                $('#confirm_password').focus();
                return false;
            }

            if (password != confirm_password) {
                alert('Please enter the correct confirm password!');
                $('#confirm_password').focus();
                return false;
            }


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                "headers": {
                    "accept": "application/json",
                    "Access-Control-Allow-Origin":"*"
                },
                type:"POST",
                url: '/reset-password-save',
                data: {"password": password,"confirm_password":confirm_password,"mobile_no":mobile_no},
                cache:false,
                crossDomain: true,
                "async": true,
                success:function(data){

                    if (data == 'success'){

                        $('#sblk').css('display','none');
                        $('#tblk').css('display','block');

                    }else{

                        alert(data);

                    }

                },
                error:function (){}
            });

        });

    </script>

@endsection
