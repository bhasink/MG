@extends('layouts.layout')

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>

@endsection
@section('content')
    <div class="hero-text occulus-banner">
        <a class="video" data-video="https://www.youtube.com/embed/5q6BcQq_yhw" data-toggle="modal" data-target="#videoModal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
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

                <img src="/images/Oculus-Quest-about.png" alt="">

            </div>
            <div class="col-md-7">

                <h1 class="title-occulus">Oculus</h1>

                <p>Create a travelogue through our incredible VR library; explore the most popular and visited natural attractions in North America, the Horseshoe bend or hear locals narrating their rural tales, we have handpicked a bundle of experiences with Oculus Rift. Exclusively at our Microgravity planet for you.
                </p>
            </div>

        </div>
    </section>

    <section class="games-images">

        <div class="container-fluid row">

            <div class="col-md-4 col-sm-4  img-hover-occulus" data-toggle="modal" data-target="#exampleModal">

                <img src="/images/occulus-game-1.jpg" alt="">

            </div>
            <div class="col-md-4 col-sm-4  img-hover-occulus" data-toggle="modal" data-target="#exampleModal1">

                <img src="/images/occulus-game-2.jpg" alt="">

            </div>
            <div class="col-md-4 col-sm-4  img-hover-occulus" data-toggle="modal" data-target="#exampleModal2">

                <img src="/images/occulus-game-3.jpg" alt="">

            </div>
        </div>
        <div class="col-md-12 row">

            <div class="col-md-4 img-hover-occulus" data-toggle="modal" data-target="#exampleModal3">

                <img src="/images/occulus-game-4.jpg" alt="">

            </div>


            <div class="col-md-4 img-hover-occulus" data-toggle="modal" data-target="#exampleModal3">

                <img src="/images/occulus-game-4.jpg" alt="">

            </div>
            <div class="col-md-4 last-img" >
                <img src="/images/last-btn.jpg" alt="">
                <div class="centered"><a class="register-btn" href="#" >More Games Coming Soon</a>
                </div>


            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">360Stories</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-12">


                                <p>360Stories uses engaging 360º content to transport you to the most amazing destinations on Earth. Hear locals tell their stories as they show you around their urban and natural landscapes through photos and videos in virtual reality. Immerse yourself in your trip beforehand and easily book experiences for your next vacation. No amount of research online will truly represent the feeling of actually traveling, but surrounding yourself in 360Stories gets pretty close!</p>

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


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal1 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">Foodie 360º</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-12">


                                <p>Foodie 360° is a virtual reality experience that will take you to exotic locations in Southeast Asia to experience the world of Asian culture and cuisine. This is the second VR experience, based on the documentary television series 'Confucius Was A Foodie' starring celebrity Chef Christine Cushing. Go behind the scenes with immersive 360 video as Christine gives a personalized tour of the salt fields of Thailand,  the markets of Malaysia, an open air hawker in Singapore, and much more!</p>

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



                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">Venice</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-12">


                                <p>Foodie 360° is a virtual reality experience that will take you to exotic locations in Southeast Asia to experience the world of Asian culture and cuisine. This is the second VR experience, based on the documentary television series 'Confucius Was A Foodie' starring celebrity Chef Christine Cushing. Go behind the scenes with immersive 360 video as Christine gives a personalized tour of the salt fields of Thailand,  the markets of Malaysia, an open air hawker in Singapore, and much more!</p>

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



                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h1 class="title-game-modal">Horseshoe Bend</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body game-modal">
                        <div class="col-md-12 row">

                            <div class="col-md-12">


                                <p>Horseshoe Bend is a truly iconic landmark. Located right next to America's Grand Canyon, it is located where the Colorado does a massive twist in a horseshoe bend shape. One of the most popular and visited natural attractions in North America, most people who visit Horseshoe Bend view it from the main lookout point, which offers a truly stunning view.</p>

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

                          

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="container gallery-sec">

        <h1 class="title-gallery-occulus">Gallery</h1>

        <div class="gallery">
            <div class="img-hover-gallery-occulus"><img src="/images/gallery/occulus-gallery-1.jpg"></div>
            <div class="img-hover-gallery-occulus"><img src="/images/gallery/occulus-gallery-2.jpg"></div>
            <div class="img-hover-gallery-occulus"><img src="/images/gallery/occulus-gallery-3.jpg"></div>

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

            $('.gallery').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots:true,

                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            dots:true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots:false,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots:false,
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
