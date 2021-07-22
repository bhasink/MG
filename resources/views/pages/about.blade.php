@extends('layouts.layout')

@section('styles')
 <title>About Us | Microgravity</title>
 <meta property="og:title" content="Safety and Sanitisation Procedure at Microgrativy">
  <meta name="description" content="Microgravity is a gaming arena in Gurugram that features modern simulators & uses free-roaming technology for multiplayer virtual reality games."> 
    <meta property="og:description" content="Microgravity is a gaming arena in Gurugram that features modern simulators & uses free-roaming technology for multiplayer virtual reality games."> 
	
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
	<style>
	.hero-text-about {
    background: url(../images/abbanner.jpg) center no-repeat;
    background-position: 100% 82%;
	background-size: cover;
    height: 50vh;
}

@media screen and (max-width: 767px){
	.hero-text-about{
		background: url(../images/Cover-mobile-03-03.png) center no-repeat;
    background-position: center;
    background-size: cover;
    height: 64vh;
	}
}
	</style>


@endsection
@section('content')
    <div class="hero-text-about"></div>

    <section class="container about-us">

        <div class="col-md-12">
            <h1 class="common-title about-us-title">About Us
            </h1>

            <p style="text-align: left;padding: 20px 10px 0px 10px">Microgravity stands for bringing to life your dreams. It’s a magical world crafted with
technology. </p>

            <p style="text-align: left;padding: 20px 5px 0px 10px">Microgravity as a brand is working on delivering a world-class multi-player gaming 
experience. Whether you want to play at a state-of-the-art gaming arena or try your hand at 
competing with your friends in an e-sports league format; we bring to you the best 
infrastructure & platforms the industry has to offer. 
</p>

            <p style="text-align: left;padding: 20px 5px 0px 10px">To start with we are introducing cutting edge free-roaming technology for multiplayer 
gaming at our first location in Gurgaon along with some of the best immersive gaming 
formats. The arena boasts world-class simulators, virtual reality bays, classic video gaming 
docks and a golf experience using cutting edge projection & simulation technology. </p>
<p style="text-align: left;padding: 20px 5px 0px 10px">When you walk into this experiential game space, you time-travel to the future of 
multiplayer entertainment. Friends and family can come together as a group and engage as a 
team. We believe in creating communities around popular gaming & experiential content. 
We aim to build a platform to enable social interaction while delivering a memorable 
experience at our gaming arenas. </p>

<p style="text-align: left;padding: 20px 5px 0px 10px">Microgravity in partnership with leading global principals is also further developing the 
Microgravity Gaming League which looks to enhance and promote the esports league 
format.  We are invested in creating a scalable platform for competitive gaming which lets 
the best compete with the best. Microgravity Gaming League has recently promoted popular 
games like FIFA, Call of Duty and Free Fire to encourage young gamers.</p>

<p style="text-align: left;padding: 20px 5px 0px 10px">The company is also looking to leverage cutting edge AR and VR technologies to bring 
solutions for the industry. The team is aggregating innovation led solutions for Travel, 
Education & Retail. </p>

<p style="text-align: left;padding: 20px 5px 0px 10px">An impactful team of professionals in partnership with global principals brings these highly 
immersive and innovation led experiences. </p>

        </div>

    </section>

    <section class="container-fluid gallery-sec gallery-sec-about">

        <h1 class="title-about-us">Our Arena</h1>

        <div class="gallery about-us-box">
            <div class="img-hover-gallery-about"><img src="/images/about/gallery/ABOUT-US-03.jpg" alt="Gaming Arena"></div>
            <div class="img-hover-gallery-about"><img src="/images/about/gallery/ABOUT-US-04.jpg" alt="Squad Games"></div>
            <div class="img-hover-gallery-about"><img src="/images/about/gallery/ABOUT-US-05.jpg" alt="Free Roam Games"></div>

        </div>

    </section>
	
	<section class="application new-cusromixe bgtransparent">
<div class="container">
        <div class="col-md-12">
            <h1 class="common-title bs">Protective Measures
			
			</h1>
			<p>So you take risks in the game, not in the arena </p>
			
			
			<div class="arenaimgs">
				<div class="row">
					 <div class="col-md-2">
							<img src="./images/Signify.png" class="img-fluid">
					 </div>
					<div class="col-md-10">
						<p style="font-size: 1.2em;text-align: left;margin: 0 !important;" class="business-text">COVID-19 is still a very real threat to the world and Microgravity aims to bring this experience to everyone in the most fun, safe and immersive manner. We have partnered exclusively with Signify (formerly Philips Lighting) to ensure a multipronged disinfection strategy at the arena. 
            </p><p style="font-size: 1.2em;text-align: left;margin: 0 0 !important;" class="business-text">The company uses best-in-class equipment for this service, which is carried out by trained and certified operators dressed up in mandated protective gear. The effectiveness of Signify’s UV-C light sources to deactivate viruses has been validated by Boston University.</p>
					 </div>
				</div>
			</div>
			
			<p style="font-size: 1.2em;" class="business-text">Besides social distancing and other safety norms, we also follow a four-step routine. This consists of disinfecting the entire arena with-
            </p>
			
        </div>

		<div class="col-md-12 ">
           
            <ul class="app">
			
				<li>
                    <div>
                     <img src="./images/UV disinfectant light unit.svg">
                    </div>
                    <span>UV disinfectant light unit</span>
                 
                </li>
				
				<li>
                    <div>
                       <img src="./images/UVC Handheld Disinfectant.svg">
                    </div>
                    <span>UVC Handheld Disinfectant</span>

                </li>
				
                <li>
                    <div>
						<img src="./images/Covibusters disinfection services.svg">
                    </div>
                   <span>Covibusters disinfection services</span>
                    
                </li>

                <li>
                    <div>
                       <img src="./images/UV-C Disinfection Chamber.svg"> 
                    </div>
                   
                    <span>UV-C Disinfection Chamber</span>

                </li>

            </ul>
        </div>
		</div>
    </section>
	

    <section class="contact">
        <div class="container">
            <h3 style="font-weight: 800; margin-bottom: 1em;">DROP US A NOTE</h3>

            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>

            <div class="container-fluid contact-from" id="contact-from">
                <div class="container">
                    <div class="formBox">
                         <form>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="inputBox ">
                                                <input id="fname" type="text" name="" class="input" placeholder="First Name">
                                                <p id="error-name"></p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="inputBox">
                                                <input id="lname" type="text" name="" class="input" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="inputBox">
                                                <input id="email" type="email" name="" class="input" placeholder="Email">
                                                <p id="error-email"></p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="inputBox">
                                                <input id="mobile" type="text" name="" class="input" placeholder="Mobile">
                                                <p id="error-phone"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="inputBox">
                                                <textarea name="" id="message" class="input" placeholder="Message"></textarea>
                                                <p id="error-msg"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="submit" name="" class="btn know-more sub-btn btn-submit" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>

            <div class="con-thnx" style="display: none;">
                Form has been submitted! We will contact back to you later.
            </div>

        </div>

    </section>
	

@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>

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

    <script type="text/javascript">

        $(document).ready(function(){

            $('.gallery').slick({
                infinite: true,
                arrows: true,
                centerMode: true,
                centerPadding: '250px',
                slidesToShow: 1,
                slidesToScroll: 1,
                dots:true,

                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '250px',
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots:true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: true,
                            dots:true,
                            centerMode: true,
                            centerPadding: '10px',
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
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

    <script>
        $(function() {
            $(".video").click(function () {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-video"),
                    videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function () {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });
        });
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
