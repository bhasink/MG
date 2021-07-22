@extends('layouts.layout')

@section('styles')
 <title>Online Gaming Event - Esports Tournament/League & Online Gaming Championship</title>
<meta property="og:title" content="Online Gaming Event - Esports Tournament/League & Online Gaming Championship">
 <meta name="keywords" content="Online Gaming Event, esports league, esports tournament, online gaming tournament, online gaming championship">
  <meta name="description" content="Microgravity esports league is one of the biggest online gaming tournaments in India. Register today for free & participate in Microgravity esports gaming tournament and win exciting prizes."> 
    <meta property="og:description" content="Microgravity esports league is one of the biggest online gaming tournaments in India. Register today for free & participate in Microgravity esports gaming tournament and win exciting prizes."> 
	
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
	<link rel="stylesheet" type="text/css" href="/css/neweve.css"/>


@endsection
@section('content')

        <section class="hero-text-about">
<div class="about-banner-content">  

        <h1>Online Gaming Event</h1>
        </div>

    </section>
	
	<section class="lightbga eventintro text-center">
		<div class="container">
		<div class="col-lg-10 mx-auto">
		<p><strong>We have an array of events which includes online as well as offline events. We look forward to celebrating gaming in every way possible. Our aim is to grow this community of garners whether they play to compete or just have fun. Come be a part of it and pick the event that excites you the most! <strong></p>
		</div>
		</div>
	</section>
	
	
	  <section class="all-events myevents">
				<div class="container">
                    <h1 class="common-title1">Upcoming Events</h1>
					<div class="mx-auto col-lg-10 mt-5">
						<p>There's a lot of thrill, excitement and fierce competition on the horizon with our upcoming events. We consistently work towards online as well as offline events which involve fun activities, conversation starters and of course games. Watch this space for updates on more such events!</p>
					</div>
					
                     <div class="events"> 
					
					 <div class="img-hover">
					 <img src="./images/events/event slider-fifa.jpg">
					 </div>
					 
                        
                        <div class="img-hover"><img src="/images/events/event-slider-banner-3.jpg"></div>
                       
 

                    </div> 


					</div>
                </section>
				
				
				 <section class="all-events myevents mb-5">
						<div class="container">
                    <h1 class="common-title1">Past Events</h1>
					<div class="mx-auto col-lg-10 mt-5">
						<p>Microgravity has held many offline and online events which include Microgravity Gaming League (MGL) which became our claim to fame as soon as it launched. </p>
					</div>
					
                     <div class="events">
					
					
					 
                        <div class="img-hover">
                            <a href="/events-int" target="_blank">
                            <img src="/images/events/event-slider-banner-1.png">
                            </a>
                        </div>
                        <div class="img-hover">
                           
                                <img src="/images/events/event-slider-banner-2.png">
                            
                        </div>
						
						<div class="img-hover">
                           
                                <img src="/images/events/Womensdayeventsliderbanner.jpg">
                            
                        </div>
						
						
                      

                    </div>


					</div>
                </section>
	
	
	

@endsection

@section('script')
 <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.all-games').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '80px',
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }

                ]

            });
        });

    </script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.events').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '80px',
                            slidesToShow: 1
                        }
                    }

                ]

            });
        });

    </script>

    <script type="text/javascript">

        $(document).ready(function(){
            $('.media').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

    </script>

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

    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-submit").click(function(e){

            e.preventDefault();

            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();
            var phone = $("#mobile").val();
            var message = $("#message").val();
            var name = fname+lname;

            $.ajax({
                type:'POST',
                url:"{{ route('contact_us') }}",
                data:{name:name, email:email, phone:phone, message:message},
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        $('.contact-from').css('display','none');
                        $('.con-thnx').css('display','block');
                    }else{
                        console.log(data);
                        
                        if (data.error.message){
                            $('#error-msg').css('color','red').html(data.error.message[0]);
                        }else{
                            $('#error-msg').html('');
                        }
                        if (data.error.phone){
                            $('#error-phone').css('color','red').html(data.error.phone[0]);
                        }else{
                            $('#error-phone').html('');
                        }

                        if (data.error.email){
                            $('#error-email').css('color','red').html(data.error.email[0]);
                        }else{
                            $('#error-email').html('');
                        }

                        if (data.error.name){
                            $('#error-name').css('color','red').html(data.error.name[0]);
                        }else{
                            $('#error-name').html('');
                        }
                    }
                }
            });

        });

    </script>

@endsection
