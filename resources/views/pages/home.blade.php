@extends('layouts.layout')

    @section('styles')
  <title>Microgravity Ventures - A Magical Gaming Arena Crafted with Tech
  </title>
 <meta property="og:title" content="Microgravity Ventures - A Magical Gaming Arena Crafted with Tech">
    <meta name="description" content="Microgravity Ventures is an entertainment hub & gaming arena in Gurgaon(Delhi NCR) that features modern simulators & state-of-the-art technology for multiplayer VR games.">
	<meta property="og:description" content="Microgravity Ventures is an entertainment hub & gaming arena in Gurgaon(Delhi NCR) that features modern simulators & state-of-the-art technology for multiplayer VR games."> 
  <meta name="keywords" content="gaming arena">

	   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="/css/websitenew.css?v=4"/>
        <style>
            .video-banner video {
                width: 120%;
            }

            .main-banner-text1 {
                position: absolute;
                /* right: unset; */
                bottom: 5% !important;
                display: flex;
                /* left: unset; */
                align-items: center;
                justify-content: center;
                z-index: 10;
                padding-top: 20px;
                padding-bottom: 20px;
                color: #fff;
                text-align: left;
            }

            .know-more-banner1 {
                border: 2.2px solid #ffcd00;
                border-radius: 30px;
                width: 175px;
                text-align: center;
                font-size: 1.2em;
                background-color: #ffcd00;
                margin: 20px 8px;
                cursor: pointer;
                color: #000;
                height: 35px !important;
                font-weight: initial;
                padding: 3px!important;
                text-transform: capitalize;
            }
			
			@media screen and (max-width: 6000px) and (min-width: 1280px){
			.carousel-item.banner-l.customizesd {
				background-image: url(/images/banner1948x900.jpg) !important;
				background-position: top;
			}
			.carousel-item{    height: 620px;}
			
			}
			
			@media screen and (max-width: 6000px) and (min-width: 1366px){
			.carousel-item.banner-l.customizesd {
				background-image: url(/images/banner1948x900.jpg) !important;
				    background-position: bottom;
					background-size: 100% 100%;
			}
			.carousel-item{    height: 582px;}
			
			}
			
			@media screen and (max-width: 6000px) and (min-width: 1490px){
			.carousel-item.banner-l.customizesd {
				background-image: url(/images/banner1948x900.jpg) !important;
				background-position: top;
			}
			.carousel-item{    height: 620px;}
			
			}
			
			@media screen and (max-width: 6000px) and (min-width: 1720px){
			.carousel-item.banner-l.customizesd {
				background-image: url(/images/banner1948x900.jpg) !important;
				background-position: top;
			}
			.carousel-item{    height: 704px;}
			
			}
			
			@media screen and (max-width: 767px) and (min-width: 320px){
			.carousel-item.banner-l.customizesd {
				background-image: url(/images/Mobile-316x520.jpg) !important;
				background-position: top;
			}
			.carousel-item{    height: 520px;}
			
			.video-banner video {
			width: 151%;
			}

			}
			
			@media screen and (max-width: 767px) and (min-width: 340px){
			.carousel-item.banner-l.customizesd {
				background-image: url(/images/Mobile-316x520.jpg) !important;
				background-position: center;
			}
			.carousel-item{    height: 688px;}
		
			}
			
			@media screen and (max-width: 767px) and (min-width: 414px){
			.carousel-item.banner-l.customizesd {
				background-image: url(/images/Mobile-316x520.jpg) !important;
				background-position: center;
			}
			.carousel-item{    height: 688px;}
		
			}


        </style>

    @endsection

    @section('content')

        <header>
            <div class="top-slider">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                    </ol>
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active" >

                            <div class="video-banner desk-videos">
                                <div class="overlay"></div>
                                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                                    <source src="/video/sing2.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="video-banner mobile-videos">
                                <div class="overlay"></div>
                                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                                    <source src="/video/mobile-video/Homepage2.mp4" type="video/mp4">
                                </video>
                            </div>

                            <div class="carousel-caption main-banner-text">
                                <h1>A magical world crafted with tech</h1>
                                <div>
                                    <a href="/about" class="btn know-more-banner">Know More</a>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item   banner-one">
                            <div class="carousel-caption main-banner-text">
                                <h2>EPIC SCALE MULTI-<br>PLAYER Free Roaming</h2>
                                <p>Get your squad to our new world of adventure</p>
                                <div>

                                    <a class="btn know-more-banner" href="/games/free-roam">Join the Game</a></div>
                            </div>
                        </div>

                        <div class="carousel-item banner-two">
                            <div class="carousel-caption main-banner-text">
                                <h2>GOLF</h2>
                                <p>Let us be your caddy!!</p>
                                <div>

                                    <a style="background-color:#27c416;border: 2.2px solid #27c416;" class="btn know-more-banner" href="/games/golf">Join the Game</a></div>
                            </div>
                        </div>

                        <div class="carousel-item banner-three">
                            <div class="carousel-caption main-banner-text">
                                <h2>The Teleport Bay</h2>
                                <p>Wander with us to your favourite location!</p>
                                <div><a style="background-color:#0657e6;border: 2.2px solid #0657e6;"  href="/games/teleport-bay" class="btn know-more-banner">Know More</a>

                                </div>
                            </div>
                        </div>

                        <div class="carousel-item  banner-l customizesd" style="box-shadow: none;">
                            <a href="#">
                                <div class="carousel-caption main-banner-text1">

                                    <div><a href="https://mgl.microgravity.co.in/" target="_blank" class="btn know-more-banner1 hmones">Know More</a>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="main-sec">


            <section class="container about-us">

               <div class="col-md-12">

                   <div>

                       <h2 class="common-title">About Us
                       </h2>

 <p>Microgravity stands for bringing to life your dreams. It’s a magical world crafted with technology.</p>

<p style="padding: 0px 10px 20px 10px;">Microgravity as a brand is working on delivering a world-class multi-player gaming experience. Whether you want to play at a state-of-the-art gaming arena or try your hand at competing with your friends in an e-sports league format; we bring to you the best infrastructure & platforms the industry has to offer.</p>

<p>The moment you step inside our flagship property, you get catapulted into the future with gaming technology that is debatably ahead of its time. It is not just designed for gamers but for anyone who loves entertainment. Head over to Microgravity at JMD Empire Square, Gurgaon and get blown away by the future that has arrived.</p>

                       

						  


                       <a href="/about" class="btn know-more">Know More</a>
                   </div>

               </div>

            </section>

            <section class="container-fluid games d-none d-lg-none d-xl-block">

                <div class="col-md-12 row game frb">

                    <div class="col-md-6 txtblkbk">

                        <h3 class="title">EPIC SCALE FREE ROAMING</h3>
                        <div></div>

                        <p>Bring your friends, family & colleagues. Eight players can play these games at a time. Try the most advanced free-roaming gaming technology. Walk into this virtual world as if it's the real world. Begin your in-game life. It's action time! Go 'Sol' searching, fight the zombies, or just get onto a secret mission. The choice is yours. All you have to do is head to the hub and get in the game! Build your squad & come as a team.

                        </p>

                        <div>

                            <a href="/games/free-roam"  class="btn know-more-fr">Book Now</a>
                        </div>


                    </div>


                </div>

                <div class="col-md-12 row game vrbb">


                    <div class="col-md-6">
                    </div>

                    <div class="col-md-6 txtblkbk text-right">

                        <h3 class="title mb-title float-right">Virtual Reality Bays</h3>

                        <p class="float-right">
                            Looking to make your dreams come true! There are no limits. These state of the art virtual reality bays offer an amazing choice of gaming titles and content. You may be looking for some action or adventure or just putting your mind to test. You can also try your hand at a sport. We got the perfect choices for you. Experience this new frontier of entertainment. Don’t wait. Try this now…
                        </p>
                   <div style="padding-bottom: 3.0rem;">
                        <a href="/games/virtual-reality-bays" class="btn know-more-mb">Know More</a>

                   </div>

</div>
                </div>

                <div class="col-md-12 row game gb">

                    <div class="col-md-6 txtblkbk">

                        <h3 class="title golf-title">Golf</h3>

                        <p>Waiting to see the ball soar into the horizon after a perfect tee shot. Want to play a different PGA course. Just grab your golf kit and head to the hub! <br>Indulge yourself into a calming experience of golf in the heart of Gurgaon.<br>Why miss a game with your friends due to busy schedules or inclement weather? Marvel at the world’s best simulation technology and experience. Nothing should come in between your passion for the sport and the need to be with your golfing friends. We are open 12 hours a day.<br />
						Game time: 30 minute slots upto 2 hours

                        </p>

                        {{--<a href="/games/golf" class="btn know-more-golf">Know More</a>--}}
                        <a href="/games/golf"  class="btn know-more-golf">Book Now</a>

                    </div>

                    <div class="col-md-6">
                    </div>

                </div>

                <div class="col-md-12 row game csim">


                    <div class="col-md-6">
                    </div>

                    <div class="col-md-6 txtblkbk text-right">

                        <h3 class="titlecs mc-title float-right">Car Simulator</h3>

                        <p class="float-right">
                            Let us get the door for you as you slide into the best of cars engineered especially for you to unlock VR racing games.
                        </p>
                        <div style="padding-bottom: 3.0rem;">
                            <a href="/games/car-simulator" class="btn know-more-mb">Know More</a>

                        </div>

                    </div>
                </div>



            </section>


                <section class="container games d-lg-block d-xl-none">

                    <div class="row game">
                        <h3 class="title">EPIC SCALE FREE ROAMING</h3>
                        <div class="col-md-6 gi">
                        </div>
                        <div class="col-md-6">

                            <p>
                                Bring your friends, family & colleagues. Eight players can play these games at a time. Try the most advanced free-roaming gaming technology. Walk into this virtual world as if it's the real world. Begin your in-game life. It's action time! Go 'Sol' searching, fight the zombies, or just get onto a secret mission. The choice is yours. All you have to do is head to the hub and get in the game! Build your squad & come as a team.
                            </p>
                            <div>
                                <a href="/games/free-roam" class="btn know-more-fr">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 row game">
                        <h3 class="title mb-title float-right">Virtual Reality Bays</h3>
                        <div class="col-md-6 mb">
                        </div>
                    <div class="col-md-6">
                        <p>Looking to make your dreams come true! There are no limits. These state of the art virtual reality bays offer an amazing choice of gaming titles and content. You may be looking for some action or adventure or just putting your mind to test. You can also try your hand at a sport. We got the perfect choices for you. Experience this new frontier of entertainment. Don’t wait. Try this now…</p>

                        <div><a href="/games/virtual-reality-bays" class="btn know-more-mb">Know More</a>

                        </div>
                        </div>



                    </div>

                    <div class="col-md-12 row game">
                        <h3 class="title golf-title">Golf</h3>

                        <div class="col-md-6 gf">
                        </div>
                        <div class="col-md-6">
 <p>Waiting to see the ball soar into the horizon after a perfect tee shot. Want to play a different PGA course. Just grab your golf kit and head to the hub! <br>Indulge yourself into a calming experience of golf in the heart of Gurgaon.<br>Why miss a game with your friends due to busy schedules or inclement weather? Marvel at the world’s best simulation technology and experience. Nothing should come in between your passion for the sport and the need to be with your golfing friends. We are open 12 hours a day</p>

                           <div>
                            <a href="/games/golf"  class="btn know-more-golf">Book Now</a>
                           </div>
                        </div>

                    </div>

                    <div class="col-md-12 row game">
                        <h3 class="title mb-title float-right">Car Simulator</h3>
                        <div class="col-md-6 csim">
                        </div>
                        <div class="col-md-6">
                            <p>Let us get the door for you as you slide into the best of cars engineered especially for you to unlock VR racing games.</p>

                            <div><a href="/games/car-simulator" class="btn know-more-mb">Know More</a>


                            </div>
                        </div>



                    </div>

                </section>
        </div>


            <div class="main-sec2">

                <section class="container home-all-games">

                    <h2 class="common-title1">All Games</h2>

                    <div class="all-games">

                            <a href="/games/free-roam">  <div class="img-hover">
                                    <img  src="/images/games/allgamesnew1.jpg" alt="Microgravity Epic Scale Free Roaming"><h2 class="all-gmaes-caption ">Epic Scale<br> Free Roaming</h2></div>
                            </a>

                            <a href="/games/golf">
                                <div class="img-hover"><img src="/images/games/allgamesnew2.jpg" alt="Microgravity Golf Simulators"><h2 class="all-gmaes-caption">GOLF</h2></div>
                            </a>

                            <a href="/games/teleport-bay">
                                <div class="img-hover"><img src="/images/games/allgamesnew3.jpg" alt="Microgravity The Teleport Bay"><h2 class="all-gmaes-caption">	The<br> Teleport Bay</h2></div>
                            </a>
                            <a href="/games/virtual-reality-bays">
                                <div class="img-hover"><img src="/images/games/allgamesnew5.jpg" alt="Microgravity VR Bays"><h2 class="all-gmaes-caption">Virtual <br>Reality Bays</h2></div>
                            </a>

                            <a href="/games/video-gaming-bays">
                                <div class="img-hover"><img src="/images/games/allgamesnew4.jpg" alt="Microgravity Video Gaming Bays"><h2 class="all-gmaes-caption">Video<br>Gaming Bays</h2></div>
                            </a>
							
							<a href="/games/car-simulator">
                            <div class="img-hover"><img src="/images/games/car-simulator 316x520.jpg"><h2 class="all-gmaes-caption" alt="Microgravity Car Simulators">Car<br>Simulator</h2></div>
                        </a> 


                    </div>
                    <div class="mobkm">
                    <a href="/all-games" class="btn know-more">Know More</a>

                    </div>


                </section>

            </div>


                <section class="container all-events">

                    <h2 class="et">Events</h2>

                    <div class="events">
					
					 <div class="img-hover"> <a href="https://mgl.microgravity.co.in/" target="_blank"><img src="/images/events/event slider-fifa.jpg?v=3" alt="Microgravity Gaming League - Fifa"></a></div>
					 
                        <div class="img-hover">
                            <img src="/images/events/event-slider-banner-1.png" alt="Microgravity Gaming Leauge - Call of Duty">
                        </div>
                        <div class="img-hover">
                           
                                <img src="/images/events/event-slider-banner-2.png" alt="Microgravity Gaming Leauge - FireFire">
                            
                        </div>
                        <div class="img-hover"><img src="/images/events/event-slider-banner-3.jpg" alt="Microgravity Gaming League - Valorant"></div>
						 
                    </div>

					 <div class="mobkm">         
								<a href="/events" class="btn know-more">Know More</a>
						  </div>
						  
                </section>


            <div class="main-sec2">

                <section class="container all-media">

                    <h2 class="mdt">Media</h2>

                    <div class="media">
					
					<div class="img-hover">
                            <a href="https://m.dailyhunt.in/news/india/english/newsvoir-epaper-newsvoir/microgravity+supports+skill+it+mentorship+programme+for+upskilling+underprivileged+students-newsid-n279569252" target="_blank"><img src="./images/media/DailyHunt.jpg"></a></div>
							
							
							<div class="img-hover">
                            <a href="https://in.news.yahoo.com/microgravity-supports-skill-mentorship-programme-111843800.html" target="_blank"><img src="./images/media/YahooNews.jpg"></a></div>
					
					
							
					<div class="img-hover">
                            <a href="https://www.financialexpress.com/opinion/reality-bites-golf-simulators-can-be-as-much-fun-and-not-half-as-terrifying-as-the-real-thing/2216863/" target="_blank"><img src="/images/media/financial express.jpg"></a></div>
							
					
							<!--<div class="img-hover">
                            <a href="https://www.financialexpress.com/opinion/reality-bites-golf-simulators-can-be-as-much-fun-and-not-half-as-terrifying-as-the-real-thing/2216863/" target="_blank"><img src="/images/media/financial express.jpg"></a></div>-->
							
							<div class="img-hover">
                            <a href="https://economictimes.indiatimes.com/tech/funding/microgravity-a-vr-ar-gaming-firm-raises-1-2-million-in-seed-funding/articleshow/81469750.cms" target="_blank"><img src="/images/media/22.jpg"></a></div>
							
						<div class="img-hover">
                            <a href="https://gamejvsslive.co/microgravity-gaming-league-to-host-indias-biggest-fifa-21-tournament/" target="_blank"><img src="/images/media/news.jpg"></a></div>	
							
					<div class="img-hover">
                            <a href="https://www.google.com/amp/s/www.bgr.in/gaming/future-of-vr-gaming-is-now-in-india-and-even-you-can-experience-it-943562/amp/" target="_blank"><img src="/images/media/BGR.jpg"></a></div>
							
							<div class="img-hover">
                            <a href="https://www.digit.in/news/gaming/microgravity-new-fifa-21-tournament-in-india-59292.html" target="_blank"><img src="/images/media/Digit.jpg"></a></div>
							
							<div class="img-hover">
                            <a href="https://www.financialexpress.com/industry/technology/uv-c-disinfection-keeping-our-offices-germ-free/2203064/" target="_blank"><img src="/images/media/55.jpg"></a></div>
							
							<div class="img-hover">
                            <a href="https://www.digit.in/news/vr-ar/microgravity-new-vr-ar-facility-gurugram-58581.html" target="_blank"><img src="/images/media/Digit.jpg"></a></div>
							
							<div class="img-hover">
                            <a href="https://www.stuff.tv/in/news/microgravity-brings-best-vr-ar-experiences-under-one-big-roof" target="_blank"><img src="/images/media/6.jpg"></a></div>
							
							<div class="img-hover">
                            <a href="https://www.pcquest.com/womens-gaming-league-microgravity-extends-esports-opportunity-indian-gamer-girls/" target="_blank"><img src="/images/media/7.jpg"></a></div>
							
							<div class="img-hover">
                            <a href="https://www.youtube.com/watch?v=0EQnNTNxauQ" target="_blank"><img src="/images/media/8.jpg"></a></div>
							
							<div class="img-hover">
                            <a href="http://www.businessworld.in/article/Microgravity-Gaming-League-Announces-Top-3-Winners/30-12-2020-359860/" target="_blank"><img src="/images/media/2.jpg"></a></div>
							
                        <div class="img-hover">
                            <a href="https://www.mediabrief.com/microgravity-gaming-league-to-host-cod-mobile-tournament/" target="_blank"><img src="/images/media/1.jpg"></a></div>
                        
                        <div class="img-hover">
                            <a href="https://europeangaming.eu/portal/latest-news/2020/12/28/84227/microgravity-gaming-league-call-of-duty-mobile-tournament-wraps-up-with-a-nail-biting-finish/" target="_blank"><img src="/images/media/3.jpg"></a></div>
                        <div class="img-hover">
                            <a href="https://www.thegamingreporter.com/microgravity-gaming-league-call-of-duty-mobile-tournament-comes-to-an-end/" target="_blank"><img src="/images/media/4.jpg"></a></div>
                        <div class="img-hover">
                            <a href="https://www.animationxpress.com/games/mgl-call-of-duty-mobile-tournament-wraps-up-with-team-ind-as-champions/" target="_blank"><img src="/images/media/5.jpg"></a></div>
                    </div>

					 <div class="mobkm">         
								<a href="/media" class="btn know-more">Know More</a>
						  </div>
						  

                </section>

            </div>


<section class="application new-cusromixe bgtransparent">
<div class="container">
        <div class="col-md-12">
            <h2 class="common-title bs">Protective Measures
		
			</h2>
				<p>So you take risks in the game, not in the arena</p>
			 
            <div class="arenaimgs">
				<div class="row">
					 <div class="col-md-2">
							<img src="/images/Signify.png" class="img-fluid" alt="Microgravity Protective Safety Measures">
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
                     <img src="/images/UV disinfectant light unit.svg" alt="UV disinfectant light unit">
                    </div>
                    <span>UV disinfectant light unit</span>
                 
                </li>
				
				<li>
                    <div>
                       <img src="/images/UVC Handheld Disinfectant.svg" alt="UVC Handheld Disinfectant">
                    </div>
                    <span>UVC Handheld Disinfectant</span>


                </li>
				
                <li>
                    <div>
						<img src="/images/Covibusters disinfection services.svg" alt="Covibusters disinfection services">
                    </div>
                   <span>Covibusters disinfection services</span>
                    
                </li>

                <li>
                    <div>
                       <img src="/images/UV-C Disinfection Chamber.svg" alt="UV-C Disinfection Chamber">
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

<section class="knowseocont">
<div class="container">
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    About Microgravity
  </button>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
   <p> Microgravity stands for bringing to life your dreams. It’s a magical world crafted with technology. </p>
<p>Microgravity as an idea and a modern gaming arena is constantly evolving towards delivering a world-class multi-player gaming experience. You can either choose to play at a state-of-the-art gaming arena or try your hand at competing with your friends in an e-sports league format; we bring to you one of India’s best infrastructure & platforms the gaming industry has to offer. </p>
<p>We’ve introduced top of the line free-roaming technology for multiplayer gaming at our flagship outlet in Gurgaon along with some of the best immersive gaming formats. The gaming arena boasts of world-class simulators, virtual reality bays, classic video gaming docks and a golf experience using cutting edge projection & simulation technology.</p>

<p>We have also initiated a platform for competitive gaming called Microgravity Gaming League where all the gamers who want to rise to the top compete against one another. We are invested in creating a scalable platform for competitive gaming which lets the best compete with the best. Microgravity Gaming League has recently promoted popular games like FIFA, Call of Duty and Free Fire to encourage budding pro-gamers.</p>

<p>The moment you walk into our gaming arena, you get transported into the future with gaming technology that is debatably ahead of its time. It is not just designed for gamers but for anyone who loves entertainment. Head over to Microgravity at JMD Empire Square, Gurgaon and get blown away by the future that has arrived. </p>

  </div>
</div>
</div>
</section>



<div class="modal" tabindex="-1" role="dialog" id="mdl">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body" style="text-align: center;">
                <p style="font-size: 1.4em;">Active booking is under progress.</p>
            </div>
            <div class="modal-footer">

                <form method="post" action="/cancel/order/data">
                    @csrf
                    <button class="btn btn-success btn-failed1 btn-d" type="submit">Cancel Order</button>
                </form>


                <a  style="margin-right: 1em;" href="/wavier-tc" class="btn btn-success btn-failed1">Proceed to booking</a>


            </div>
        </div>
    </div>
</div>



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
