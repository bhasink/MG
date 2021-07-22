@extends('layouts.layout')

@section('styles')


    <title>{{$data['get_games']->meta_title}}</title>
    <meta property="og:title" content="{{$data['get_games']->meta_title}}">
    <meta name="description" content="{{$data['get_games']->meta_description}}">
    <meta property="og:description" content="{{$data['get_games']->meta_description}}">
    <meta name="keywords" content="{{$data['get_games']->meta_keywords}}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <style>

        .title:after {
            border-bottom: 10px solid {{$data['get_games']->ProductColor}};
        }

        .g-title:after {
            content: "";
            border-bottom: 10px solid {{$data['get_games']->ProductColor}};
        }

        .title-gallery:after {
            content: "";
            border-bottom: 10px solid {{$data['get_games']->ProductColor}};
        }

        #product_date::placeholder{
            color: #ffffff;
        }
       .mob-video{
           display: none;
       }

        @media screen and (max-width: 768px) {
            .mob-video{
                display: block;
            }
            .desk-video{
                display: none;
            }
        }


        .gmk{
            padding: 2em;
            transition: 0.5s linear;
        }

        .gmk:hover .gimg{
            opacity: 1 !important;
        }

        .rfe {
            display: flex;
            position: relative;
        }

        .gimg {
            position: absolute;
            background-color: #313030;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gimg span{
            color:#ffffff;
        }

        .games-images img {
            width: 100%;
            padding: 0rem;
        }
    </style>




@endsection
@section('content')
    <div class="video-banner desk-video">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{'/video/'.$data['get_games']->BackgroundVideo}}" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div style="text-align: center;" class="w-100">
                    <a class="video" data-video="{{$data['get_games']->VideoLink}}" data-toggle="modal" data-target="#videoModal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"/>
                            <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"/></svg></a>

                    @if($data['get_games']->Name == 'GOLF SIMULATORS')

                    <div class="text-center;"><a class="register-btn" href="#" >Pick a course</a></div>


                    @else



                        <div class="text-center;"><a class="register-btn" href="#" >Pick a game</a></div>


                    @endif


                </div>
            </div>
        </div>
    </div>
    <div class="video-banner mob-video">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{'/video/mobile-video/'.$data['get_games']->BackgroundVideo}}" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div style="text-align: center;" class="w-100">
                    <a class="video" data-video="{{$data['get_games']->VideoLink}}" data-toggle="modal" data-target="#videoModal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"/>
                            <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"/></svg></a>

                    @if($data['get_games']->Name == 'GOLF SIMULATORS')

                    <div class="text-center;"><a class="register-btn" href="#" >Pick a course</a></div>


                      @else


                        <div class="text-center;"><a class="register-btn" href="#" >Pick a game</a></div>


                    @endif



                </div>
            </div>
        </div>
    </div>
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
    {{--<div class="hero-text" style="background: url({{asset('/images/'.$data['get_games']->BannerImage)}}) center no-repeat;">--}}
    {{--<a class="video" data-video="{{$data['get_games']->VideoLink}}" data-toggle="modal" data-target="#videoModal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">--}}
    {{--<path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"/>--}}
    {{--<path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"/></svg></a>--}}

    {{--<a class="register-btn" href="#" >join the game</a>--}}


    {{--</div>--}}

    <section class="games-description">

        <div class="col-md-12 row">

            <div class="col-md-5">

                <img src="{{asset('/images/'.$data['get_games']->SubImage)}}" alt="games cateogory">

            </div>
            <div class="col-md-7 sd">

                <h1 class="title">{{$data['get_games']->Name}}</h1>

                <p>
                    {!! $data['get_games']->Description !!}
                </p>



                @if($data['get_games']->slug == "car-simulator")
                    <h2 class="title">VR Car</h2>
					
					<p>Step into the future instantaneously as you firm your grip around the steering wheel and put on the VR headset. This powerful machine will have you glued to the seat as you zoom through the tracks at mind-blowing speed. </p>
<p>You can choose the difficulty level, the type of track you want and even the car. The tweeters behind your head that are inbuilt with the machine will make you forget that you're inside a gaming arena. This Virtual Reality Car is one of the best there is when it comes to Virtual Reality Racing Games. </p>

<p>Strap on your seatbelt and get ready to vanquish your need for speed.</p>

                    <br>

                @endif

            </div>

        </div>
    </section>

    <section class="games-images">
        @if($data['get_games']->Name == 'GOLF SIMULATORS')
            <h2 class="g-title">Courses</h2>

            <p style="margin-top: 2em;padding: 0em 2em;">{!! $data['get_games']->SDescription !!}</p>

        @else
            @if($data['get_games']->Name != 'Virtual Reality Egg')

            <h2 class="g-title">Games</h2>

                <p style="margin-top: 2em;padding: 0em 2em;">{!! $data['get_games']->SDescription !!}</p>
			

            @endif
        @endif

        <div class="container-fluid row">

            @if(isset($data['get_sub_product_data']))
                @foreach($data['get_sub_product_data'] as $key=>$get_sub_product_data)

                    <div class="col-md-4 col-sm-4 img-hover gm_card gmk" data-toggle="modal" data-target="#myModal" data-contents="{{json_encode($get_sub_product_data)}}">




                     <div class="rfe">

                         <img src="{{asset('/images/'.$get_sub_product_data->ThumbnailImage)}}" alt="games thumb">

                         <div class="gimg" style="opacity: 0;">

                             @if($data['get_games']->Name == 'GOLF SIMULATORS')

                             <span class="know-more" style="color: #000000;justify-content: center;">Book Now</span>

                                 @elseif($data['get_games']->Name == 'Epic Scale Free Roaming')

                                     <span class="know-more" style="color: #000000;justify-content: center;">Book Now</span>


                                 @else

                                 <span class="know-more" style="color: #000000;justify-content: center;">Know More</span>

                             @endif

                         </div>

                     </div>

                    </div>

                @endforeach
            @endif

                @if($data['get_games']->Name == 'GOLF SIMULATORS')

                <div class="col-md-4 col-sm-4 img-hover gm_card gmk" data-toggle="modal" data-target="#myModal3" data-contents="{{json_encode($get_sub_product_data)}}">

                    <img src="/images/golf-game8.jpg" alt="">

                </div>
                    <div class="col-md-4 col-sm-4 img-hover gm_card gmk" data-toggle="modal" data-target="#myModal2" data-contents="{{json_encode($get_sub_product_data)}}">

                        <img src="/images/golf-game9.jpg" alt="">

                    </div>
                @endif

                @if($data['get_games']->Name != 'GOLF SIMULATORS' && $data['get_games']->Name != 'Virtual Reality Egg' && $data['get_games']->Name != '360 Chair')
                    <div class="col-md-4 last-img gmk" >
                        <img src="/images/last-btn.jpg" alt="">
                        <div class="centered"><a class="register-btn" href="#" >More Games Coming Soon</a>
                        </div>
                    </div>

                @endif


                @if($data['get_games']->Name == '360 Chair')
                    <div class="col-md-4 last-img gmk" >
                        <img src="/images/last-btn.jpg" alt="">
                        <div class="centered"><a class="register-btn" href="#" data-toggle="modal" data-target="#myModal35" >More Games Coming Soon</a>
                        </div>
                    </div>

                @endif


        </div>

        <!-- Modal 1 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content games-content">
                    <div class="modal-header">
                        <h2 class="title-game-modal"></h2>
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

                                    @if($data['get_games']->Name != 'GOLF SIMULATORS')
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game&nbsp;time<br><p class="points game-time">15 min</p>
                                        </a>
                                    </li>

                                    @endif

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            for&nbsp;ages<br><p class="points player-age">13+</p>
                                        </a>
                                    </li>

                                    @if($data['get_games']->Name != 'GOLF SIMULATORS')
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game&nbsp;type<br><p class="points game-type">Adventure</p>
                                        </a>
                                    </li>

                                    @endif

                                </ul>

                                <div class="row">

                                    @if($data['get_games']->Name == 'GOLF SIMULATORS')

                                        <div class="col mobile-col-modal">
                                            <select name="product_type" id="product_type" class="form-control" style="width: 180px; " >
                                                <option value="">--Select Product--</option>

                                                @if($data['get_golf_products'])

                                                    @foreach($data['get_golf_products'] as $key=>$get_golf_products)

                                                    <option value="{{$get_golf_products->ProductID}}">{{$get_golf_products->ProductIDValue}}</option>

                                                    @endforeach

                                                @endif

                                            </select>
                                        </div>

                                        <div class="col mobile-col-modal" >
                                            <input type="date" id="product_date" name="txtDate" class="form-control" placeholder="yyyy-mm-dd">
                                        </div>

                                        <br><br><br>


                                        <div class="col align-self-end">
                                            <a class="btn know-more-modal bkn" href="#" >Book Now</a>
                                        </div>

                                        @else

                                        @if($data['get_games']->IsBooking != false)
                                        <div class="col align-self-end">
                                            <a class="btn know-more-modal bkn" href="#" >Book Now</a>
                                        </div>

                                        @endif

                                    @endif


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

            <!-- Modal 1 -->

            <div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lgg modal-dialog-centered" role="document">
                    <div class="modal-content games-content">
                        <div class="modal-header">
                            <h2 class="title-game-modfal">Standard Courses</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body game-modal">
                            <div class="col-md-12 row">

{{--                                <div class="col-md-12">--}}


                                    <p class="game-desdc">
                                        <div class="row">
                                            <div class="col-md-4 glist">
                                                <ul>
                                                    <li><b>EXOTIC COLLECTION</b></li>
                                                    <li>Far East Tour</li>
                                                    <li>Hollow Grounds</li>
                                                    <li>HSC</li>
                                                    <li>Kynzvart</li>
                                                    <li>Nine Dragons </li>
                                                    <li>Nine Dragons B/C</li>
                                                    <li>OUC</li>
                                                    <li>Red Rock Valley</li>
                                                    <li>Scottish Brae</li>
                                                    <li>Sheshan</li>
                                                </ul>
                                            </div>

                                        <div class="col-md-4 glist">
                                            <ul>
                                                <li><b>TROPICAL COLLECTION</b></li>
                                                <li>Ashley Farms</li>
                                                <li> Atlantis</li>
                                                <li>Old Palm</li>
                                                <li> Par 3</li>
                                                <li> Parkland</li>
                                                <li>Pine Rivers</li>
                                                <li>Tuscany</li>
                                                <li> Venetian</li>
                                                <li> Waterlefe</li>
                                            </ul>
                                        </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>RESORT COLLECTION</b></li>
                                            <li>Bay Harbor (Links/Quarry)</li>
                                            <li>Heather</li>
                                            <li>Links 2011</li>
                                            <li>Preserve</li>
                                            <li>Ross</li>
                                            <li>Shady Dunes</li>
                                            <li>Sunridge</li>
                                            <li>Teeth 2011</li>
                                            <li>Texas</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>WILDSTONE</b></li>
                                            <li>Wildstone</li>
                                        </ul>
                                    </div>
                                        </div>
                                    </p>

                                    <ul class="game-points">
                                        <li>
                                            <a target="_blank" href="#" rel="nofollow">
                                                players<br><p class="points pladyers">1-4</p>

                                            </a>
                                        </li>



                                        </li>

                                        <li>
                                            <a target="_blank" href="#" rel="nofollow">
                                                for&nbsp;ages<br><p class="points player-age">10+</p>
                                            </a>
                                        </li>






                                    </ul>
                                {{--<div class="col align-self-end">--}}
                                    {{--<a class="btn know-more-modal bkn" href="#" >Book Now</a>--}}
                                {{--</div>--}}
{{--                                    <div class="row">--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-4 modal-img">--}}

{{--                                    <img class="game-sub-image" src="" alt="">--}}

{{--                                </div>--}}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal 2 -->

            <div class="modal fade bd-example-modal-lg" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lgg modal-dialog-centered" role="document">
                    <div class="modal-content games-content">
                        <div class="modal-header">
                            <h2 class="title-game-modafl">Premium Courses</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body game-modal">
                            <div class="col-md-12 row">

                                {{--                                <div class="col-md-12">--}}


                                <p class="game-desdc">
                                <div class="row">
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>Pebble Beach  Collection </b></li>
                                            <li>Pebble Beach Golf Links  </li>
                                            <li>Spyglass Hill  Golf Course </li>
                                            <li>The Links at Spanish Bay  </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>St Andrews Links  Collection</b></li>
                                            <li>Old Course  at St Andrews </li>
                                            <li>Old Course  at St Andrews </li>
                                            <li>Jubilee Course  at St Andrews </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>The Carolinas Collection</b></li>
                                            <li>Harbour Town </li>
                                            <li>Pine Needles  Golf Club</li>
                                            <li>The Ocean Course at Kiawah Island Golf Resorts</li>
                                            <li>The Ocean Course at Kiawah Island Golf Resorts - Hayden Lake</li>
                                            <li>The Ocean Course at Kiawah Island Golf  Resorts - Coeur D Alene</li>

                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>Czech Collection</b></li>
                                            <li>Konopiste D'Este</li>
                                            <li>Konopiste Radecky</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>Korea Collection Volume 1</b></li>
                                            <li>Grand Country Club of Korea</li>
                                            <li>Gapyeong Benest Golf Club</li>
                                            <li>Taeyoung Country Club</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>Korea Collection Volume 2</b></li>
                                            <li>Daegu Country Club</li>
                                            <li>Lake Hills Country Club</li>
                                            <li>Namchon Country Club</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>Korea Collection Volume 3</b></li>
                                            <li>Mauna Ocean Golf and Resort</li>
                                            <li>Montvert Country Club</li>
                                            <li>TGV Country Club</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>Individual Premium Courses</b></li>
                                            <li>Wildstone Country Club</li>
                                            <li>Infamous 18, based on the paintings of Loyal H "Bud" Chapman</li>
                                            <li>Druids Glen Country Club</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>Continental Collection </b></li>
                                            <li>Aleria Gardens</li>
                                            <li>Kulkuchon Sanctuary</li>
                                            <li>Donoma Pass</li>
                                            <li>Peligro Range</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>"Destination Kohler" Courses </b></li>
                                            <li>Whistling Straits , "The Straits", site of the 2020 Ryder Cup</li>
                                            <li>Whistling Straits , "The Irish"</li>
                                            <li>Blackwolf Run, "Meadow Valleys"</li>
                                            <li>Blackwolf Run, "The River"</li>
                                            <li>Blackwolf Run, "Original Championship Course" </li>
                                            <li>The Duke's Championship Course at St Andrews </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 glist">
                                        <ul>
                                            <li><b>Individual Courses - Exclusives</b></li>
                                            <li>PGA Centenary Course at Gleneagles (2014 Ryder Cup Venue)</li>
                                            <li>Hazeltine National Golf Club (Member  Course)</li>
                                            <li>Hazeltine National Golf Club (2016 Ryder Cup versions)</li>
                                            <li>Le Golf National Albatros Course, Paris (2018 Ryder Cup Venue) </li>

                                        </ul>
                                    </div>
                                </div>
                                </p>

                                <ul class="game-points">
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            players<br><p class="points pladyers">1-4</p>

                                        </a>
                                    </li>

                                    {{--<li>--}}
                                        {{--<a target="_blank" href="#" rel="nofollow">--}}
                                            {{--Game&nbsp;time<br><p class="points game-time">15 min</p>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            for&nbsp;ages<br><p class="points player-age">10+</p>
                                        </a>
                                    </li>




                                </ul>

                                {{--<div class="col align-self-end">--}}
                                    {{--<a class="btn know-more-modal bkn" href="#" >Book Now</a>--}}
                                {{--</div>--}}


                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <!-- Modal 3 -->

            <div class="modal fade bd-example-modal-lg" id="myModal35" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lgg modal-dialog-centered" role="document">
                    <div class="modal-content games-content">
                        <div class="modal-header">
                            <h2 class="title-game-modal">More Games</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body game-modal">
                            <div class="col-md-12 row">

                                {{--                                <div class="col-md-12">--}}


                                <p class="game-desdc">
                                <div class="row">
                                    <div class="col-md-12 glist">
                                        <ul>
                                            <li>Halloween Coaster</li>
                                            <li>End of the World Journey  </li>
                                            <li>Future City Coaster </li>
                                            <li>Pearl of the Orient </li>
                                            <li>Battle of the Night </li>

                                        </ul>
                                    </div>

                                </div>
                                </p>

                                <ul class="game-points">
                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            players<br><p class="points pladyers">2-8</p>

                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            Game&nbsp;time<br><p class="points game-time">15 min</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="#" rel="nofollow">
                                            for&nbsp;ages<br><p class="points player-age">13+</p>
                                        </a>
                                    </li>

                                    @if($data['get_games']->Name != 'GOLF')

                                        <li>
                                            <a target="_blank" href="#" rel="nofollow">
                                                Game&nbsp;type<br><p class="points game-tydpe">Adventure</p>
                                            </a>
                                        </li>

                                    @endif


                                </ul>

                                <div class="col align-self-end">
                                    <a class="btn know-more-modal bkn" href="#" >Book Now</a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </section>
    <section class="container-fluid gallery-sec gallery-sec-about gallery-video-main">

        @if($data['get_sub_product_video_data']->first() != null)
            <h2 class="g-title s-title">Sneak Peek</h2>
        @endif

        <div class="gallery-video about-us-box">

            @if($data['get_sub_product_video_data']->first() != null)
                @foreach($data['get_sub_product_video_data'] as $key=>$get_sub_product_video_data)

                    <div class="video-text"> <a data-fancybox="gallery" href="{{$get_sub_product_video_data->VideoLink}}"><img  src="{{asset('/images/gallery/'.$get_sub_product_video_data->Image)}}" alt="games_video"><div class="centered "><p class="text-videoicon"></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 50px;fill: #ffffff; cursor: pointer;" xml:space="preserve">
            <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"></path>
                                    <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"></path></svg></div></a>

                    </div>

                @endforeach
            @endif

        </div>

    </section>
    <section class="container gallery-sec">

        @if($data['get_product_gallery_data']->first() != null)
        <h2 class="title-gallery">Gallery</h2>

        <div class="gallery">

                @foreach($data['get_product_gallery_data'] as $key=>$get_product_gallery_data)

                    <div class="img-hover-gallery">
                        <img src="{{asset('/images/gallery/'.$get_product_gallery_data->Image)}}" alt="gaming gallery">
                    </div>

                @endforeach

        </div>
        @endif
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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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


            @if($data['get_games']->Name == 'GOLF SIMULATORS')

                var today = new Date().toISOString().split('T')[0];
                document.getElementsByName("txtDate")[0].setAttribute('min', today);

                $('.bkn').click(function () {

                    if($('#product_type').val()==''){

                        $('#product_type').css('border','1px solid red');
                        return false;
                    }else{
                        $('#product_type').css('border','1px solid black');

                    }

                    if($('#product_date').val()==''){
                        $('#product_date').css('border','1px solid red');

                        return false;
                    }else{
                        $('#product_date').css('border','1px solid black');
                    }


                    var ProductType = document.getElementById("product_type");
                    ProductType = ProductType.options[ProductType.selectedIndex].value;

                    var date = $('#product_date').val();


                    function isValidDate(dateString) {
                        var regEx = /^\d{4}-\d{2}-\d{2}$/;
                        if(!dateString.match(regEx)) return false;  // Invalid format
                        var d = new Date(dateString);
                        var dNum = d.getTime();
                        if(!dNum && dNum !== 0) return false; // NaN value, Invalid date
                        return d.toISOString().slice(0,10) === dateString;
                    }

                    if (!isValidDate(date)){
                        alert('Invalid date');
                        return false;
                    }


                    var product = $('.bkn').attr('href');

                        product += '/'+date+'/'+ ProductType+'/'+'bay1';

                    $('.bkn').attr('href',product);



                });

            @endif

            $('.gm_card').click(function() {

                var games = $(this).data('contents');

                $('.title-game-modal').html(games.SubProductName);

                $('.game-desc').html(games.Description);

                $('.players').html(games.Players);

                $('.game-time').html(games.GameDuration);

                $('.player-age').html(games.PlayerAge+'+');

                $('.game-type').html(games.GameType);

                var SubImage = games.SubImage;

                var SubProductGUID = games.SubProductGUID;

                var ProductFamilyGUID = games.ProductFamilyGUID;

                var StoreGUID = games.StoreGUID;

                var date = (new Date()).toISOString().split('T')[0];

                var dt = new Date();
                var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

                date = date+" "+time;

                // if (SubImage == null){
                //     user_image = 'profile.png';
                // }

                $('.game-sub-image').attr('src','/images/games/'+SubImage);


                @if($data['get_games']->Name == 'GOLF SIMULATORS')

                $('.bkn').attr('href','/booking-golf/'+SubProductGUID+'/'
                    +ProductFamilyGUID+'/'+StoreGUID);

                @else

                $('.bkn').attr('href','/booking/'+SubProductGUID+'/'
                    +ProductFamilyGUID+'/'+StoreGUID+'/'+date);

                @endif

            });

        });

    </script>


    <script>
        $(".register-btn").click(function() {
            $('html, body').animate({
                scrollTop: $(".games-images").offset().top
            }, 500);
        });
    </script>

@endsection
