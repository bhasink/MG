@extends('layouts.layout')

@section('styles')

 <title>Microgravity Free Roam – Epic Scale Free Roaming VR Games</title>
 <meta property="og:title" content="Microgravity Free Roam – Epic Scale Free Roaming VR Games"> 
      <meta name="description" content="Experience the adventure of free roam VR gaming at Microgravity free roam gaming zone. Get your squad together and book multiple free roam VR games at Microgravity.">
	<meta property="og:description" content="Experience the adventure of free roam VR gaming at Microgravity free roam gaming zone. Get your squad together and book multiple free roam VR games at Microgravity."> 
	 <link rel="canonical" href="https://www.microgravity.co.in/games/free-roam" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


@endsection
@section('content')
    <div class="video-banner">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Video Header</h1>
                    <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-text">
       <a class="video" data-video="https://www.youtube.com/embed/tcgX5YDxGJU" data-toggle="modal" data-target="#videoModal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"/>
            <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"/></svg></a>

                        <a class="register-btn" href="#" >join the game</a>

        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <iframe width="100%" height="500px;" src="" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="games-description">

        <div class="col-md-12 row">

            <div class="col-md-5">

                <img src="/images/character- sol raider.jpg" alt="">

            </div>
            <div class="col-md-7">

                <h2 class="title">Free Roam</h2>

                <p>
                    Huddle up your squad and get on the adventures of Free Roam in our Microgravity World. Go 'Sol' searching, fight the zombies, or maybe go investigating on a secret mission, the choice is yours. All you have to do is be quick on your toes and live these experiences to win them all!
                </p>
            </div>

        </div>
    </section>

    <section class="games-images">

        <div class="container-fluid row">

            <div class="col-md-4 col-sm-4  img-hover" data-toggle="modal" data-target="#exampleModal">

                <img src="/images/FREE ROAM LANDING PAGE-08.jpg" alt="Engineerium">
            
            </div>
            <div class="col-md-4 col-sm-4  img-hover" data-toggle="modal" data-target="#exampleModal1">

                <img src="/images/FREE ROAM LANDING PAGE-10.jpg" alt="Solo Raiders">

            </div>
            <div class="col-md-4 col-sm-4  img-hover" data-toggle="modal" data-target="#exampleModal2">

                <img src="/images/FREE ROAM LANDING PAGE-11.jpg" alt="Outbreak Origin">

            </div>
        </div>
        <div class="col-md-12 row">

            <div class="col-md-4 img-hover" data-toggle="modal" data-target="#exampleModal3">

                <img src="/images/FREE ROAM LANDING PAGE-12.jpg" alt="Zombie Survival">

            </div>

            <div class="col-md-4 img-hover" data-toggle="modal" data-target="#exampleModal4">

                <img src="/images/FREE ROAM LANDING PAGE-13.jpg" alt="Singularity">

            </div>
            <div class="col-md-4 last-img" >
                <img src="/images/last-btn.jpg" alt="">
                <div class="centered"><a class="register-btn" href="#" >More Games Coming Soon</a>
                </div>


            </div>
        </div>
        <!-- Modal 1 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">Engineerium</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-8">


                                <p>
                                    You are transformed into an ethereal, ancient alien, who must work with your clan to ascend through a mind-bending, mystical world to be reunited with your tribe. Be prepared to have your reality turned upside down!
                                </p>

                                <ul class="game-points">
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                          players<br><p class="points">2-8</p>

                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game time<br><p class="points">15 min</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                          for ages<br><p class="points">13+</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game type<br><p class="points">Adventure</p>
                                        </a>
                                    </li>
                                </ul>

                                    <div class="row">
                                        <div class="col align-self-end">
                                            <a href="" class="btn know-more-modal">Book Now</a>
                                        </div>
                                        {{--<div class="col align-self-end show-gallery">--}}
                                            {{--<a href="" class="btn know-more-gallery">Show Gallery</a>--}}
                                        {{--</div>--}}
                                    </div>
                            </div>

                            <div class="col-md-4 modal-img">

                                <img src="/images/games/character- engineerium.jpg" alt="">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">Sol Raiders</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-8">


                                <p>
                                    You are the last of what is left of human life and we are taking you to explore the vastness of this universe. In this new planet of possibilities, survival is the key! And to surive all you need is the power source "Sol". Winners make the score by collecting 'Sol', losers turn to metal scraps, which to be honest is not a good look! Let's get rich??
                                </p>

                                <ul class="game-points">
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            players<br><p class="points">2-8</p>

                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game time<br><p class="points">15 min</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            for ages<br><p class="points">13+</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game type<br><p class="points">Player vs Player</p>
                                        </a>
                                    </li>
                                </ul>

                                <div class="row">
                                    <div class="col align-self-end">
                                        <a href="" class="btn know-more-modal">Book Now</a>
                                    </div>
                                    {{--<div class="col align-self-end show-gallery">--}}
                                    {{--<a href="" class="btn know-more-gallery">Show Gallery</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>

                            <div class="col-md-4 modal-img">

                                <img src="/images/character- sol raider.jpg" alt="">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">Zombie survival</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-8">


                                <p>
                                    Your team is trapped, bunkered in a fort, amidst the chaos brought on by a zombie outbreak. A rescue team is on its way but you must defend the fort and hold on until they arrive. Are you all ready to save the day?</p>

                                <ul class="game-points">
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            players<br><p class="points">2-8</p>

                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game time<br><p class="points">15 min</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            for ages<br><p class="points">13+</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game type<br><p class="points">Shooting</p>
                                        </a>
                                    </li>
                                </ul>

                                <div class="row">
                                    <div class="col align-self-end">
                                        <a href="" class="btn know-more-modal">Book Now</a>
                                    </div>
                                    {{--<div class="col align-self-end show-gallery">--}}
                                    {{--<a href="" class="btn know-more-gallery">Show Gallery</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>

                            <div class="col-md-4 modal-img">

                                <img src="/images/games/character-zobie survival.jpg" alt="">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal 4 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">Outbreak Origins</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-8">


                                <p>
                                    A deadly virus is wreaking havoc, creating hordes of zombies that are taking over the cities. Your squad needs to do something quick! Prepare yourself for epic battles on your mission to find a cure.</p>

                                <ul class="game-points">
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            players<br><p class="points">2-8</p>

                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game time<br><p class="points">30 min</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            for ages<br><p class="points">13+</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game type<br><p class="points">Shooting</p>
                                        </a>
                                    </li>
                                </ul>

                                <div class="row">
                                    <div class="col align-self-end">
                                        <a href="" class="btn know-more-modal">Book Now</a>
                                    </div>
                                    {{--<div class="col align-self-end show-gallery">--}}
                                    {{--<a href="" class="btn know-more-gallery">Show Gallery</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>

                            <div class="col-md-4 modal-img">

                                <img src="/images/games/character-outbreak-origin.jpg" alt="">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal 5 -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">Singularity</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-8">


                                <p>You and your team are sent to investigate a secret military space station that has gone dark. Fight your way through killer robots, rogue drones and merciless gun turrets to reclaim the high-tech military black-site. How will you fair against AI?
                                </p>

                                <ul class="game-points">
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            players<br><p class="points">2-8</p>

                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game time<br><p class="points">30 min</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            for ages<br><p class="points">13+</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game type<br><p class="points">Shooting</p>
                                        </a>
                                    </li>
                                </ul>

                                <div class="row">
                                    <div class="col align-self-end">
                                        <a href="" class="btn know-more-modal">Book Now</a>
                                    </div>
                                    {{--<div class="col align-self-end show-gallery">--}}
                                    {{--<a href="" class="btn know-more-gallery">Show Gallery</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>

                            <div class="col-md-4 modal-img">

                                <img src="/images/games/character-singularity.png" alt="">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid gallery-sec gallery-sec-about gallery-video-main">

            <div class="gallery-video about-us-box">
                <div class="video-text"> <a  data-fancybox="gallery" href="https://www.youtube.com/watch?v=ADOEuzyYstc"><img  src="/images/gallery/freeroam-video1.png"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                                <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

                </div>

                <div class="video-text"> <a  data-fancybox="gallery" href="https://www.youtube.com/watch?v=QpHX8iHScRA"><img  src="/images/gallery/freeroam-video2.png"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                                <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

                </div>

                <div class="video-text"> <a  data-fancybox="gallery" href="https://www.youtube.com/watch?v=olxRUGhWKuA"><img  src="/images/gallery/freeroam-video3.png"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                                <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

                </div>

                <div class="video-text"> <a  data-fancybox="gallery" href="https://www.youtube.com/watch?v=b871kq_tQKM"><img  src="/images/gallery/freeroam-video4.png"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                                <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

                </div>

                <div class="video-text"> <a  data-fancybox="gallery" href="https://www.youtube.com/watch?v=KTuHpiU_HTc"><img  src="/images/gallery/freeroam-video5.png"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                                <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

                </div>

            </div>

    </section>
    <section class="container gallery-sec">

        <h3 class="title-gallery">Gallery</h3>

        <div class="gallery">
            <div class="img-hover-gallery"><img src="/images/gallery/g1.jpg"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/g3.jpg"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/g2.jpg"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/Artboard-1.png"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/Artboard-2.png"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/Artboard-3.png"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/Artboard-4.jpg"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/Artboard-5.png"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/Artboard-6.png"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/Artboard-7.png"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/gg1.JPG"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/gg2.JPG"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/gg3.JPG"></div>
            <div class="img-hover-gallery"><img src="/images/gallery/gg4.JPG"></div>
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

        $(document).ready(function(){

            $('.gallery-video').slick({
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
                            dots:true,
                        }
                    }

                ]

            });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function(){

            $('.gallery').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,

                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
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

@endsection
