@extends('layouts.layout')

@section('styles')
<title>Microgravity Golf Simulator | Virtual Golf | Indoor Golf Simulator</title>
 <meta property="og:title" content="Microgravity Golf Simulator | Virtual Golf | Indoor Golf Simulator"> 
    <meta name="description" content="Get real life golf experience with Microgravity golf simulator. Choose from premium golf courses for the best gaming experience with world-class golf simulation technology.">
	<meta property="og:description" content="Get real life golf experience with Microgravity golf simulator. Choose from premium golf courses for the best gaming experience with world-class golf simulation technology.">  
	<link rel="canonical" href="https://www.microgravity.co.in/games/golf" />
	
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	
	
    <link rel="stylesheet" type="text/css" href="/css/games.css"/>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

@endsection
@section('content')
    <div class="hero-text golf-banner">
        <a class="video" data-video="https://www.youtube.com/embed/Ekh2c7cgJ38" data-toggle="modal" data-target="#videoModal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
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

                <img src="/images/golf-About.png" alt="Golf Simulator at Microgravity">

            </div>
            <div class="col-md-7">

                <h1 class="title-golf">Golf</h1>

                <p>
                    Indulge in a calming experience of golfing without the hinderance of busy schedules & inclement weather. Unlock the challenges and get better at your game with Microgravity World, don't let the offseason come in your way to be the best golfer. Come day, come night and get your buddies to discover the vastness of our tech-crafted international and PGA rated golf courses.
                </p>
            </div>

        </div>
    </section>

    <section class="games-images">

        <div class="container-fluid row">

            <div class="col-md-4 col-sm-4  img-hover-golf" data-toggle="modal" data-target="#exampleModal">

                <img src="/images/golf-game1.jpg" alt="Pebble Beach Golf Link">

            </div>
            <div class="col-md-4 col-sm-4  img-hover-golf" data-toggle="modal" data-target="#exampleModal">

                <img src="/images/golf-game2.jpg" alt="The Old Course, St Andrews">

            </div>
            <div class="col-md-4 col-sm-4  img-hover-golf" data-toggle="modal" data-target="#exampleModal">

                <img src="/images/golf-game3.jpg" alt="The Straits, Whistling Straits">

            </div>
        </div>
        <div class="col-md-12 row">

            <div class="col-md-4 img-hover-golf" data-toggle="modal" data-target="#exampleModal">

                <img src="/images/golf-game4.jpg" alt="The Original Championship Course">

            </div>

            <div class="col-md-4 img-hover-golf" data-toggle="modal" data-target="#exampleModal">

                <img src="/images/golf-game5.jpg" alt="PGA Centenary Course">

            </div>
            <div class="col-md-4 last-img" >
                <img src="/images/last-btn.jpg" alt="">
                <div class="centered"><a class="register-btn" href="#" >More TITLES</a>
                </div>


            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </section>
    <section class="container-fluid gallery-sec gallery-sec-about gallery-video-main">
        <div class="gallery-video about-us-box">
            <div class="video-text"> <a  data-fancybox="gallery" href="https://vimeo.com/349098262"><img  src="/images/gallery/golf-video1.png"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                            <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

            </div>

            <div class="video-text"> <a  data-fancybox="gallery" href="https://vimeo.com/383429112"><img  src="/images/gallery/golf-video2.png"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                            <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

            </div>

            <div class="video-text"> <a  data-fancybox="gallery" href="https://vimeo.com/379117341"><img  src="/images/gallery/golf-video3.png"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                            <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

            </div>

        </div>

    </section>
    <section class="container gallery-sec">

        <h2 class="title-gallery-golf">Gallery</h2>

        <div class="gallery">
            <div class="img-hover-gallery-golf"><img src="/images/gallery/GOLF-gallery-1.jpg" alt="Golf Simulator"></div>
            <div class="img-hover-gallery-golf"><img src="/images/gallery/GOLF-gallery-2.jpg" alt="Microgarity Golf"></div>
            <div class="img-hover-gallery-golf"><img src="/images/gallery/GOLF-gallery-3.jpg" alt="Microgarity Golf Simulator"></div>

        </div>
        <div style="display: none" class="text-center">
            <a href="" class="btn know-more">Show Gallery</a>
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
