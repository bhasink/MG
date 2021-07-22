<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<script type='application/ld+json'>{"@context": "http://www.schema.org","@type": "Organization","name": "Microgravity","url": "https://microgravity.co.in/","logo": "/images/mglogo.png","description": "Microgravity Ventures is an entertainment hub & gaming arena in Gurgaon(Delhi NCR) that features modern simulators & state-of-the-art technology for multiplayer VR games.","contactPoint": {"@type": "ContactPoint","telephone": "+91-98101 97842","contactType": "Customer Support","availableLanguage": "en"},"address": {"@type": "PostalAddress","streetAddress": "Ist Floor, JMD Empire Square, M G Road","addressLocality": "Gurgaon","addressRegion": "Haryana","addressCountry": "India"
},"sameAs": ["https://www.facebook.com/MicrogravityIND/","https://twitter.com/MicrogravityIND","https://www.instagram.com/microgravityind/","https://www.youtube.com/channel/UCRYnaArUvFejVx8NLwp4LbA" ]}}
</script>

<script type="application/ld+json">{"@context": "http://schema.org","@type": "WebSite",       "url": "https://microgravity.co.in/","potentialAction": {"@type": "SearchAction", "target": "https://microgravity.co.in/search?q={search_term_string}","query-input": "required name=search_term_string"}}</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="tjhpqff54iw2nkfai6h8xtv6ssqcon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/f2.png" type="image/x-icon">
    <link rel="icon" href="/f2.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="https://microgravity.co.in/microgravity-300x200-black.png">
    <meta property="og:site_name" content="Microgravity">
    <meta property="og:image" content="https://microgravity.co.in/microgravity-300x200-black.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
    <meta property="og:url" content="https://microgravity.co.in">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}?v=6">
    <link rel="stylesheet" href="{{ asset('/css/main-minify.css') }}?v=9">
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

    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MLP9ZFM');</script>
<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '886665942181397');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=886665942181397&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


    @yield('styles')

    <style>
        .tmc{
            display: none;
        }
		.about-us .common-title{
        text-align: center;
        font-weight: 600;
        display: initial;
        font-size: 2.3rem;
    }
    .game .title {
        text-transform: uppercase;
        font-weight: 600;
        font-size: 2.2em;
        display: table-cell;
    }

    .titlecs{
        text-transform: uppercase;
        font-weight: 600;
        font-size: 2.2em;
        display: table-cell;
    }

    .common-title1,.et, .mdt, .common-title{ font-size: 2.2em; font-weight: 600;}
    @media screen and (max-width: 768px){
        .game h1{text-align: center;}
        .game .title{    margin-left: 15px;}
    }

    p.footer-address, footer span.reachphn, footer a {

    }

    </style>

</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLP9ZFM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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

		var text = ["Now open in JMD Empire Square, Gurgaon", " <a href='/safety-and-sanatization-procedures' style='color:#000; margin:0 3px;'>Offering a fun, safe and immersive experience to our customers. Click here to read about safety procedures.</a>", "Get to the Arena! Get in the game!", "We accept bookings online!!","Setting high standards of security, safety & disinfection protocols is our top priority","A World Class, State of the Art Gaming & Entertainment Hub at JMD Empire Square, Gurgaon"];

        var text = text;
        var counter = 0;
        var elem = document.getElementById("changeText");
        var inst = setInterval(change, 5000);

        function change() {
            elem.innerHTML = text[counter];
            counter++;
            if (counter >= text.length) {
                counter = 0;
                //  clearInterval(inst); uncomment this if you want to stop refreshing after one cycle
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
