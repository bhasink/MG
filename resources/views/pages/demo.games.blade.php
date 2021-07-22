@extends('layouts.layout')

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


@endsection
@section('content')
    <div class="hero-text" style="background: url({{asset('/images/'.$data['get_games']->BannerImage)}}) center no-repeat;">
        <a class="video" data-video="{{$data['get_games']->VideoLink}}" data-toggle="modal" data-target="#videoModal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
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

                <img src="{{asset('/images/'.$data['get_games']->SubImage)}}" alt="">

            </div>
            <div class="col-md-7">

                <h1 class="title">{{$data['get_games']->Name}}</h1>

                <p>
                    {{$data['get_games']->Description}}
                </p>
            </div>

        </div>
    </section>

    <section class="games-images">

        <div class="container-fluid row">

            @if(isset($data['get_sub_product_data']))
                @foreach($data['get_sub_product_data'] as $key=>$get_sub_product_data)

                    <div class="col-md-4 col-sm-4 img-hover gm_card" data-toggle="modal" data-target="#myModal" data-contents="{{json_encode($get_sub_product_data)}}">

                        <img src="{{asset('/images/'.$get_sub_product_data->ThumbnailImage)}}" alt="">

                    </div>

                @endforeach
            @endif

            <div class="col-md-4 last-img" >
                <img src="/images/last-btn.jpg" alt="">
                <div class="centered"><a class="register-btn" href="#" >More Games Coming Soon</a>
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
                                            Game type<br><p class="points game-type">Adventure</p>
                                        </a>
                                    </li>
                                </ul>

                                <div class="row">
                                    <div class="col align-self-end">
                                        <a href="" class="btn know-more-modal">Book Now</a>
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
    <section class="container-fluid gallery-sec gallery-sec-about gallery-video-main">

        <div class="gallery-video about-us-box">

            @if(isset($data['get_sub_product_video_data']))
                @foreach($data['get_sub_product_video_data'] as $key=>$get_sub_product_video_data)

                    <div class="video-text"> <a data-fancybox="gallery" href="{{$get_sub_product_video_data->VideoLink}}"><img  src="{{asset('/images/gallery/'.$get_sub_product_video_data->Image)}}"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                                    <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

                    </div>

                @endforeach
            @endif

        </div>

    </section>
    <section class="container gallery-sec">

        <h1 class="title-gallery">Gallery</h1>

        <div class="gallery">
            @if(isset($data['get_product_gallery_data']))
                @foreach($data['get_product_gallery_data'] as $key=>$get_product_gallery_data)

                    <div class="img-hover-gallery">
                        <img src="{{asset('/images/gallery/'.$get_product_gallery_data->Image)}}">
                    </div>

                @endforeach
            @endif
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

                $('.game-sub-image').attr('src','/images/games/'+SubImage);

            });

        });

    </script>

@endsection
