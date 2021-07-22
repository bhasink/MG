<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Microgravity - A magical world crafted with tech</title>
    <meta name=”description” content="Microgravity is an entertainment hub & a gaming arena that features modern simulators & state-of-the-art technology for multiplayer virtual reality games." />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/f2.png" type="image/x-icon">
    <link rel="icon" href="/f2.png" type="image/x-icon">
    <!-- MS Tile - for Microsoft apps-->
    <meta name="msapplication-TileImage" content="https://microgravity.co.in/microgravity-300x200-black.png">
    <meta property="og:site_name" content="Microgravity">
    <meta property="og:title" content="Microgravity - A magical world crafted with tech">
    <meta property="og:description" content="Microgravity is an entertainment hub & a gaming arena that features modern simulators & state-of-the-art technology for multiplayer virtual reality games.">
    <meta property="og:image" content="https://microgravity.co.in/microgravity-300x200-black.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
    <meta property="og:url" content="https://microgravity.co.in">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main-minify.css') }}?v=6">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177566870-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-177566870-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 399051010 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-399051010"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-399051010');
    </script>

    @yield('styles')

    <style>
        .tmc{
            display: none;
        }
    </style>

</head>
<body>

    <noscript>
        <style>html{display:none;}</style>
        <p style="    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: red;
    font-weight: bold;
    margin: 0;
    padding: 10px;">This site is best viewed with Javascript. Please enable the Javascript to experience this site.</p>
    </noscript>

    <!---->
        @include('layouts.header')
    <!---->
        @yield('content')
    <!---->
        @include('layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"> </script>

    <script>
        (function () {

            $("#cart").on("click", function () {
                $(".shopping-cart").fadeToggle("fast");
            });

        })();
    </script>
    @yield('script')

    <script>
        var text = ["Now open in JMD Empire Square, Gurgaon."," <a href='/safety-and-sanatization-procedures' style='color:#000; margin:0 3px;'>Offering a fun, safe and immersive experience to our customers. Click here to read about safety procedures.</a>", "Get to the Arena! Get in the game!", "A World Class, State of the Art Gaming & Entertainment Hub at JMD Empire Square", "We accept bookings online!!","Setting high standards of security, safety & disinfection protocols is our top priority"];

        var text = text;
        var counter = 0;
        var elem = document.getElementById("changeText");
        var inst = setInterval(change, 5000);

        function change() {
            elem.innerHTML = text[counter];
            counter++;
            if (counter >= text.length) {
                counter = 0;
            }
        }
    </script>

    <script>
        window.addEventListener( "pageshow", function ( event ) {
            var historyTraversal = event.persisted ||
                ( typeof window.performance != "undefined" &&
                    window.performance.navigation.type === 2 );
            if ( historyTraversal ) {
                window.location.reload();
            }
        });
    </script>

    <script>
        currLoc = $(location).attr('href');
        $.ajax({
            type:'GET',
            url:'/check-session',
            data:{data:'data'},
            success:function(data){
                if (data.session == true){
                    if(currLoc == "https://microgravity.co.in/wavier-tc" || currLoc == "https://microgravity.co.in/order" || currLoc == "https://microgravity.co.in/login" || currLoc == "https://microgravity.co.in/register") {
                        $('#mdl').modal('hide');
                    }else{
                        $('#mdl').modal('show');
                    }
                }
            }
        });

    </script>

    <script>

        $.ajax({
            type:'GET',
            url:'/timer',
            data:{data:'data'},
            success:function(data){
                console.log(data.setime);
                timer(data.setime);
            }
        });

        function timer(data){
            $('#clock').countdown(data)
                .on('update.countdown', function(event) {
                    var format = '%M:%S';
                    $('.tmc').css('display','block');
                    if(event.offset.totalDays > 0) {
                        format = '%-d day%!d ' + format;
                    }
                    if(event.offset.weeks > 0) {
                        format = '%-w week%!w ' + format;
                    }
                    $(this).html(event.strftime(format));
                })
                .on('finish.countdown', function(event) {
                    $(this).html('This product has expired!')
                        .parent().addClass('disabled');
                    $('.tmc').css('display','none');

                    $.ajax({
                        type: 'GET',
                        url: '/clear-cart',
                        data: {data: 'data'},
                        success: function (data) {
                            window.location = "/";
                            alert('Your booking session has been expired, Redirecting to homepage!');
                        }
                    });
                });
        }
    </script>

    <script type="text/javascript">
        $(".enquiry_now_fixed").click(function (e) {
            e.stopPropagation();
            $(".common-forms").toggleClass('open');
        });

        $(".enqclc").click(function (e) {
            e.stopPropagation();
            $(".common-forms").removeClass('open');
        });
    </script>

</body>
</html>
