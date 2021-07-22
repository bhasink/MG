@extends('layouts.layout')

@section('styles')

 <title>All Games | Microgravity</title>
 <meta property="og:title" content="All Games | Microgravity"> 
 <meta name="description" content="Check out all the games available at Microgravity gaming arena and book now at our website to save your slot according to your choice.">
 <meta property="og:description" content="Check out all the games available at Microgravity gaming arena and book now at our website to save your slot according to your choice.">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
 <link rel="stylesheet" type="text/css" href="/css/all-games.css?v=3"/>

@endsection
@section('content')

    <section class="container all-games" style="margin-top: 100px;">

        <div class="col-md-12">

            <div>

                <section class="container gallery-sec tsp">

                    <div class="tsp-txt">
                        <h3>PLAY THEM ALL</h3>
                        <h1 class="title-gallery">Our Games</h1>
                    </div>

                    <div class="gallery">

                        <a href="/games/free-roam">  <div class="img-hover">
						<img alt="Microgravity Epic Scale Free Roaming" src="/images/games/allgamesnew1.jpg">
						<h2 class="all-gmaes-caption">Epic Scale<br> Free Roaming</h2></div>
                        </a>

                        <a href="/games/golf">
                            <div class="img-hover"><img src="/images/games/allgamesnew2.jpg" alt="Microgravity Golf Simulators">
							<h2 class="all-gmaes-caption">GOLF</h2></div>
                        </a>

                        <a href="/games/teleport-bay">
                            <div class="img-hover"><img src="/images/games/allgamesnew3.jpg" alt="Microgravity The Teleport Bay">
							<h2 class="all-gmaes-caption">	The<br> Teleport Bay</h2></div>
                        </a>


						<a href="/games/virtual-reality-bays">
                            <div class="img-hover"><img src="/images/games/allgamesnew5.jpg" alt="Microgravity VR Bays">
							<h2 class="all-gmaes-caption">Virtual <br>Reality Bays</h2></div>
                        </a>
						
                        <a href="/games/video-gaming-bays">
                            <div class="img-hover">
							<img src="/images/games/allgamesnew4.jpg" alt="Microgravity Video Gaming Bays">
						<h2 class="all-gmaes-caption">Video<br>Gaming Bays</h2></div>
                        </a>
						
						 <a href="/games/car-simulator">
                            <div class="img-hover"><img src="./images/games/car-simulator 316x520.jpg"><h2 class="all-gmaes-caption">Car<br>Simulator</h2></div>
                        </a>

                    </div>
                </section>


                <section class="container gallery-sec frs">

                    <div class="game-slider">

                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/banner/free-roam-banner.png" class="desktop-showmed">
							<img src="./images/games/freeroam.jpg" class="mobile-showmed" alt="Free Roam Games">
							</div>

                            <div class="game-txt1 col-md-6">

                                <h1 style="text-align: left;" class="title sol">Epic Scale <br>Free Roaming</h1>
                                <div></div>

                                <p>
                                    Huddle up your squad and get on the adventures <br> of Free Roam with our Microgravity World. <br> Go 'Sol' searching or fight the zombies, or
                                    <br> maybe go investigating on a secret mission. <br> The choice is yours! </p>

                             <a href="/games/free-roam"  class="btn know-more-fr1-r">Book Now</a>
                            </div>

                        </div>


                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/banner/Free-Roam-banner.jpg" class="desktop-showmed" alt="Soloraiders">
							<img src="./images/games/freeroam.jpg" class="mobile-showmed" alt="Soloraiders">
							</div>

                            <div class="game-txt1 col-md-6">

                                <h4 style="float: initial">Epic Scale Free Roaming</h4>
                                <h1 class="title sol">SOL RAIDERS</h1>
                                <div></div>

                                <p>
                                    You are the last of what is left of human life and we are taking you to explore the vastness of this universe. In this new planet of possibilities, survival is the key! And to surive all you need is the power source "Sol". Winners make the score by collecting 'Sol', losers turn to metal scraps, which to be honest is not a good look! Let's get rich??
                                </p>

                                <a href="/games/free-roam"  class="btn know-more-fr1-r">Book Now</a>



                            </div>

                        </div>

                        <div class="slide">

                            <div class="img-hover-gallery">
								<img src="/images/banner/outbreak.png" class="desktop-showmed">
								<img src="./images/games/freeroam.jpg" class="mobile-showmed" alt="Epic Scale Free Roaming - Outbreak Origins">
							</div>

                            <div class="game-txt1 col-md-6">

                                <h4 style="float: initial">Epic Scale Free Roaming</h4>
                                <h1 class="title sol">Outbreak Origins</h1>
                                <div></div>

                                <p>
                                    A deadly virus is wreaking havoc, creating hordes of zombies that are taking over the cities. Your squad needs to do something quick! Prepare yourself for epic battles on your mission to find a cure.</p>

                                <a href="/games/free-roam"  class="btn know-more-fr1-r">Book Now</a>


                            </div>

                        </div>
                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/banner/singularity-banner.png" class="desktop-showmed">
							<img src="./images/games/freeroam.jpg" class="mobile-showmed" alt="Epic Scale Free Roaming - Singularity">
							</div>

                            <div class="game-txt1 col-md-6">

                                <h4 style="float: initial">Epic Scale Free Roaming</h4>
                                <h1 class="title sol">Singularity</h1>
                                <div></div>

                                <p>You and your team are sent to investigate a secret military space station that has gone dark. Fight your way through killer robots, rogue drones and merciless gun turrets to reclaim the high-tech military black-site. How will you fair against AI? </p>
                                <a href="/games/free-roam"  class="btn know-more-fr1-r">Book Now</a>

                            </div>

                        </div>
                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/banner/zombie-banner.png" class="desktop-showmed">
							<img src="./images/games/freeroam.jpg" class="mobile-showmed" alt="Epic Scale Free Roaming - Zombie Survival">
							</div>

                            <div class="game-txt1 col-md-6">

                                <h4 style="float: initial">Epic Scale Free Roaming</h4>
                                <h1 class="title sol">Zombie survival</h1>
                                <div></div>

                                <p>Your team is trapped, bunkered in a fort, amidst the chaos brought on by a zombie outbreak. A rescue team is on its way but you must defend the fort and hold on until they arrive. Are you and your friends ready to save the day?
                                </p>
                                <a href="/games/free-roam"  class="btn know-more-fr1-r">Book Now</a>
                            </div>

                        </div>
                        <div class="slide">

                            <div class="img-hover-gallery">
								<img src="/images/banner/engirumm-banner.png" class="desktop-showmed" alt="game">
								<img src="./images/games/freeroam.jpg" class="mobile-showmed" alt="Epic Scale Free Roam - Engineerium">
							</div>

                            <div class="game-txt1 col-md-6">

                                <h4 style="float: initial">Epic Scale Free Roaming</h4>
                                <h1 class="title sol">Engineerium</h1>
                                <div></div>

                               <p>You are transformed into an ethereal, ancient alien, who must work with your clan to ascend through a mind-bending, mystical world to be reunited with your tribe. Be prepared to have your reality turned upside down!</p>
                                <a href="/games/free-roam"  class="btn know-more-fr1-r">Book Now</a>
                            </div>

                        </div>

                    </div>
                    <!-- Modal book now -->
                    <div class="modal fade" id="exampleModalb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content games-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div style="margin-top: -1rem;" class="modal-body game-modal">
                                    <div class="col-md-12 row">

                                        <div style="text-align: center;padding-bottom: 2rem;" class="col-md-12">
                                            <h3> Thank you for showing interest. </h3>
                                            <p style="text-align: center;float: none;padding: 0;font-size: 1.2rem;">Our booking' will be available from the first week of April. </p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal 1 -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content games-content">
                                <div class="modal-header">
                                    <h1 class="title-game-modal"></h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body game-modal">
                                    <div class="col-md-12 row">

                                        <div class="col-md-8">


                                            <p class="game-desc">
                                            </p>

                                            <ul class="game-points">
                                                <li>
                                                    <a target="_blank" href="#" rel="nofollow">
                                                        players<br><p class="points players">2-8</p>

                                                    </a>
                                                </li>

                                                <li>
                                                    <a target="_blank" href="#" rel="nofollow">
                                                        Game time<br><p class="points game-time">15 min</p>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a target="_blank" href="#" rel="nofollow">
                                                        for ages<br><p class="points player-age">13+</p>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a target="_blank" href="#" rel="nofollow">
                                                        Game&nbsp;type<br><p class="points game-type">Adventure</p>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="row">
                                                <div class="col align-self-end">
                                                    <a href="" class="btn know-more-modal bkn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 modal-img">

                                            <img class="game-sub-image" src="" alt="">

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </section>


                <section class="container gallery-sec gfs">

                    <div class="game-slider">


                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/banner/Golf-Banner.jpg" class="desktop-showmed" alt="Enjoy Golf at Mocrogravity">
							<img src="/images/games/golfcourse.jpg" class="mobile-showmed" alt="Glof Course">
							</div>

                            <div class="game-txt2 col-md-6 ">

                                <h1 class="title title1 fr golf">Golf</h1>
                                <div></div>

                                <p>Come day, come night and get your buddies to discover the vastness of our PGA certified golf courses.</p>

                                <a href="/games/golf"  class="btn know-more-fr11-g">Book Now</a> 

                            </div>

                        </div>


                    </div>

                </section>

                <section style="display: none" class="container gallery-sec mbs">

                    <div class="game-slider">


                        <div class="slide">

                            <div class="img-hover-gallery"><img src="/images/banner/magic-box-banner.jpg"></div>

                            <div class="game-txt1 col-md-6">
                                <h4 style="float: initial">Virtual Reality Bays</h4>
                                <h1 class="title mb">Beat Saber</h1>
                                <div></div>

                                <p>
                                    Slash the beats of adrenaline-pumping music as they fly towards you in the futuristic world of Beat Saber. Play one of the world's most loved game brought to you by our Microgravity World.
                                </p>

                                <a href="" class="btn know-more-fr1">Know More</a>
                                <a href="" class="btn know-more-fr1">Book Now</a>

                            </div>

                        </div>


                        <div class="slide">

                            <div class="img-hover-gallery"><img src="/images/banner/magic-box-banner.jpg"></div>

                            <div class="game-txt1 col-md-6">
                                <h4 style="float: initial">Magic box</h4>
                                <h1 class="title mb">Fancy Skiing (experience) </h1>
                                <div></div>

                                <p>
                                    Ski across canyons and cross deers on this surreal Skiing experience and control your ski poles to gain speed, control your direction like you would for a real skiing adventure.
                                </p>

                                <a href="" class="btn know-more-fr1">Know More</a>
                                <a href="" class="btn know-more-fr1">Book Now</a>



                            </div>

                        </div>

                        <div class="slide">

                            <div class="img-hover-gallery"><img src="/images/banner/magic-box-banner.jpg"></div>

                            <div class="game-txt1 col-md-6">
                                <h4 style="float: initial">Virtual Reality Bays</h4>
                                <h1 class="title mb">Zero-G VR (experience)</h1>
                                <div></div>

                                <p>
                                    This zero-gravity spacewalk flight, will make you feel the edge of the universe and its black holes. Immerse in an asteroid cloud escape in our microgravity world's space shuttle. Also, don't forget to space-suit-up!
                                </p>

                                <a href="" class="btn know-more-fr1">Know More</a>
                                <a href="" class="btn know-more-fr1">Book Now</a>



                            </div>

                        </div>

                        <div class="slide">

                            <div class="img-hover-gallery"><img src="/images/banner/magic-box-banner.jpg"></div>

                            <div class="game-txt1 col-md-6">
                                <h4 style="float: initial">Virtual Reality Bays</h4>
                                <h1 class="title mb">Fruit Ninja (kids)</h1>
                                <div></div>

                                <p>
                                    Slurp your way into the juicy adventure of Fruit Ninja World. Are you ready for this mouth watering experience? If yes, then immerse in a slice of virtual reality like never before! Don't forget your aprons!
                                </p>

                                <a href="" class="btn know-more-fr1">Know More</a>
                                <a href="" class="btn know-more-fr1">Book Now</a>



                            </div>

                        </div>

                        <div class="slide">

                            <div class="img-hover-gallery"><img src="/images/banner/magic-box-banner.jpg"></div>

                            <div class="game-txt1 col-md-6">
                                <h4 style="float: initial">Virtual Reality Bays</h4>
                                <h1 class="title mb">Zombie Training Simulator (kids)</h1>
                                <div></div>

                                <p>
                                    Are you ready for the zombie apocalypse? We've done the research and want to make sure you're prepared! As the news breaks out that, 'The Zombies are here!' what do you do, where do you go?? That's right you go on a WAR.
                                </p>

                                <a href="" class="btn know-more-fr1">Know More</a>
                                <a href="" class="btn know-more-fr1">Book Now</a>



                            </div>

                        </div>

                        <div class="slide">

                            <div class="img-hover-gallery"><img src="/images/banner/magic-box-banner.jpg"></div>

                            <div class="game-txt1 col-md-6">
                                <h4 style="float: initial">Virtual Reality Bays</h4>
                                <h1 class="title mb">A-10VR (shooting)</h1>
                                <div></div>

                                <p>
                                    Enhance the classic sci-fi gallery shooter skills inside you. Get sharper shooting expertise in 4 game modes against a mesmerising outer-space landscape.
                                </p>

                                <a href="" class="btn know-more-fr1">Know More</a>
                                <a href="" class="btn know-more-fr1">Book Now</a>



                            </div>

                        </div>

                        <div class="slide">

                            <div class="img-hover-gallery"><img src="/images/banner/magic-box-banner.jpg"></div>

                            <div class="game-txt1 col-md-6">
                                <h4 style="float: initial">Virtual Reality Bays</h4>
                                <h1 class="title mb">Armed (shooting)</h1>
                                <div></div>

                                <p>
                                    Get...set...attack! Immerse in an intense action packed zombie carnage against the undead army. Wield the largest variety of weapons and take on hordes of zombies, monsters and more!
                                </p>

                                <a href="" class="btn know-more-fr1">Know More</a>
                                <a href="" class="btn know-more-fr1">Book Now</a>



                            </div>

                        </div>

                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/banner/magic-box-banner.jpg" class="desktop-showmed">
							
							</div>

                            <div class="game-txt1 col-md-6">
                                <h4 style="float: initial">Virtual Reality Bays</h4>
                                <h1 class="title mb">V ARRR</h1>
                                <div></div>

                                <p>
                                    ARRRRRR you ready to fight pirates in our sensory world of Microgravity? If you are on board this journey, hunt down the biggest ship of all! Hope you are 'Savvy' enough for this!
                                </p>

                                <a href="" class="btn know-more-fr1">Know More</a>
                                <a href="" class="btn know-more-fr1">Book Now</a>



                            </div>

                        </div>
                    </div>

                </section>

                <section class="container gallery-sec ocs" >

                    <div class="game-slider">


                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/banner/occulus.jpg" class="desktop-showmed" alt="The Teleport Bay Games">
							<img src="/images/games/teleport.jpg" class="mobile-showmed" alt="Teleport Bays">
							
							</div>

                            <div class="game-txt1 col-md-6">

                                <h1 class="title ocu">The Teleport Bay</h1> 
                                <div></div>

                                <p>
                                    Create a travelogue through our incredible VR library.<br> Explore the most popular and iconic cities or <br> natural attractions in the world. We have handpicked a <br>bundle of experiences with the state of art HTC Vive Cosmos.
                                </p>

                                <a href="/games/teleport-bay" class="btn know-more-fr1-b">Know More</a>

                            </div>

                        </div>

                    </div>
 
                </section>

                <section class="container gallery-sec pss">

                    <div class="game-slider">


                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/banner/ps4.jpg" class="desktop-showmed" alt="Video Games Bay">
							<img src="/images/games/gaminbays.jpg" class="mobile-showmed" alt="Gaming Bays">
							</div>

                            <div class="game-txt2 col-md-6">

                                <h1 class="title title1 vd fr ps4">Video Gaming Bays</h1>
                                <div></div>

                                <p>Buckle up as we teleport you to the Video Gaming hub at Microgravity World. Indulge in a plethora of games and choose your escapade, from FIFA to Modern Warfare. Rules are simple...fastest finger first!!
                                </p>

                                <a href="/games/video-gaming-bays" class="btn know-more-fr11-p" style="margin: 0;">Know More</a>
                            </div>

                        </div>

                    </div>

                </section>

                <section class="container gallery-sec ocs" style="margin-bottom: 4em;">

                    <div class="game-slider">


                        <div class="slide">

                            <div class="img-hover-gallery">
							<img src="/images/games/car-simulator.jpg" style="transform: rotateY(185deg);" class="desktop-showmed" alt="Car Simulator Games">
							<img src="/images/games/carsimulater.jpg" class="mobile-showmed" alt="Play Car Simulator at Microgravity">
							
							</div>

                            <div class="game-txt1 col-md-6">

                                <h1 class="title title1 ocu">Car Simulator</h1>
                                <div></div>

                                <p>
                                    Let us get the door for you as you slide into the best of cars engineered especially for you to unlock VR racing games.
                                </p>

                                <a href="/games/car-simulator" class="btn know-more-fr1-b" style="background: #0757e4;">Know More</a>

                            </div>

                        </div>

                    </div>

                </section>

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


@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.gallery').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    }

                ]

            });


            $('.game-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]

            });


        });

    </script>

    <script>

        $(document).ready(function() {

            $('.gm_card').click(function() {

                var games = $(this).data('contents');

                $('.title-game-modal').html(games.SubProductName);

                $('.game-desc').html(games.Description);

                $('.players').html(games.Players);

                $('.game-time').html(games.GameDuration);

                $('.player-age').html(games.PlayerAge);

                $('.game-type').html(games.GameType);

                var SubImage = games.SubImage;

                var SubProductGUID = games.SubProductGUID;

                var ProductFamilyGUID = games.ProductFamilyGUID;

                var StoreGUID = games.StoreGUID;

                $('.game-sub-image').attr('src','/images/games/'+SubImage);

                $('.bkn').attr('href','/booking/'+SubProductGUID+'/'
                    +ProductFamilyGUID+'/'+StoreGUID);


            });

        });

        $('.fr').click(function() {
            $('html, body').animate({
                scrollTop: $(".frs").offset().top-60
            }, 1000);
            return false;
        });

        $('.gf').click(function() {
            $('html, body').animate({
                scrollTop: $(".gfs").offset().top-60
        }, 1000);
            return false;
        });

        $('.mb').click(function() {
            $('html, body').animate({
                scrollTop: $(".mbs").offset().top-60
            }, 1000);
            return false;
        });


        $('.ps').click(function() {
            $('html, body').animate({
                scrollTop: $(".pss").offset().top-60
            }, 1000);
            return false;
        });


        $('.oc').click(function() {
            $('html, body').animate({
                scrollTop: $(".ocs").offset().top-60
            }, 1000);
            return false;
        });

    </script>

@endsection
