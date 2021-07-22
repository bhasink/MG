@extends('layouts.layout')
@section('content')

    <style>
        .know-more{
            height: 40px;
        }

        .know-more1 {
            border: 2.2px solid #8c7e45;
            border-radius: 30px;
            width: 175px!important;
            text-align: center;
            font-size: 1.2em;
            margin: 20px 8px;
            cursor: pointer;
            color: #000;
            font-weight: initial;
            padding: 3px!important;
            background-color: #8c7e45;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card" style="margin: 2em;">
                    <div class="card-header"><strong>Verify your phone</strong></div>
                    <div class="card-body">
                        <p style="text-align: center;">Thanks for registering with our platform. Provide the code below.</p>

                        <div class="d-flex justify-content-center">
                            <div class="col-8">
                                <form method="post" action="{{ route('phoneverification.verify') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="code">Verification Code</label>
                                        <input id="code" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" type="text" placeholder="Verification Code" required autofocus>
                                        @if ($errors->has('code'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('code') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="form-group" style="display: flex;">

                                        <div>
                                            <button type="button" id="regenerateOTP" class="know-more"  >Resend OTP </button>
                                            <div class="tim" style="display: none;">Time left = <span id="timer"></span></div>
                                        </div>
                                        <button class="know-more">Verify Phone</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#regenerateOTP').on('click', function () {
            disableResend();
            timer1(120);
            $.ajax({
                type:'POST',
                url:'/resend-otp',
                data:{data:'data'},
                success:function(data){
                }
            });

        });

        function disableResend()
        {
            $("#regenerateOTP").attr("disabled", true);
            $("#regenerateOTP").removeClass("know-more");
            $("#regenerateOTP").addClass("know-more1");
            $(".tim").css("display","block");

            setTimeout(function() {
                $('#regenerateOTP').removeAttr("disabled");
                $("#regenerateOTP").removeClass("know-more1");
                $("#regenerateOTP").addClass("know-more");
                $(".tim").css("display","none");
            }, 60000*2);
        }

        let timerOn = true;

        function timer1(remaining) {
            var m = Math.floor(remaining / 60);
            var s = remaining % 60;

            m = m < 10 ? '0' + m : m;
            s = s < 10 ? '0' + s : s;
            document.getElementById('timer').innerHTML = m + ':' + s;
            remaining -= 1;

            if(remaining >= 0 && timerOn) {
                setTimeout(function() {
                    timer1(remaining);
                }, 1000);
                return;
            }

            if(!timerOn) {
                return;
            }
        }

    </script>

@endsection