<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Uşak Üniversitesi | Anasayfa</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    <!--=============== favicons ===============-->

    <style>
        .language-selector span:not(.active):hover {
            border-radius: 100%;
            color: #fff;
        }
        .language-selector img{
            margin:11px auto 5px;
            border:1px solid #333;
            display:block;

        }
        /* V LANGUAGE SWITCHER */
        .vertical-language-selector {
            display:block;
            width:100%;
            text-align:center;
        }
        .vertical-language-selector span {
            display: block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            color: rgba(255, 255, 255, 0.41);
            font-size: 12px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
            margin:1px auto 5px;

        }
        .language-selector span.active {
            border: 1px solid rgb(3, 157, 226);

        }
        @media only screen and (max-width: 1064px) {
            .vertical-language-selector {
                display: none;
            }

            /* === END === */

        }

    </style>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
</head>
<body>
<!--loader-->
<div class="loader-wrap">
    <div class="pin"></div>
</div>
<!--loader end-->
<!-- Main  -->
<div id="main">
    <!-- header-->
    <header class="main-header">
        <a class="logo-holder" href="{{route($en ? 'en.index' :'index')}}">
            <img src="{{asset('assets/images/logo.png')}}" alt="{{$title ?? ''}}">
        </a>
        <!-- nav-button-wrap-->
        <div class="nav-button but-hol">
            <span class="nos"></span>
            <span class="ncs"></span>
            <span class="nbs"></span>
            <div class="menu-button-text">Menu</div>
        </div>


        @include('layouts.languages')
        <!-- nav-button-wrap end-->
        <div class="header-social">
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
            </ul>
        </div>
        <!--  showshare -->
        <div class="show-share showshare">
            <i class="fal fa-retweet"></i>
            <span>{{$en ? 'Share' : 'Paylaş'}}</span>
        </div>
        <!--  showshare end -->
    </header>
    <!--  header end -->
    @include('layouts.menu')
    <!-- wrapper-->
    <div id="wrapper">
        <!-- scroll-nav-wrap-->
        <div class="scroll-nav-wrap">
            <div class="scroll-down-wrap">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>{{$en ? 'Scroll Down' : 'Aşağı Kaydır'}}</span>
            </div>
            <nav class="scroll-nav scroll-init">
                <ul>
                    <li><a class="scroll-link act-link" href="#sec1">Slider</a></li>
                    <li><a class="scroll-link" href="#sec2">{{!$en ? 'İşbirliklerimiz' : 'Collaborations'}}</a></li>
                    <li><a class="scroll-link" href="#sec3">{{!$en ? 'İstatistikler' : 'Statistics'}}</a></li>
                    <li><a class="scroll-link" href="#sec4">{{!$en ? 'Haberler' : 'News'}}</a></li>
                    <li><a class="scroll-link" href="#sec5">{{!$en ? 'Ekibimiz' : 'Teams'}}</a></li>
                    <li><a class="scroll-link" href="#sec6">{{!$en ? 'Faaliyetlerimiz'  : 'Activities'}}</a></li>
                </ul>
            </nav>
        </div>
        <!-- scroll-nav-wrap end-->
        <!-- hero-wrap-->
        <div class="hero-wrap no-hidden" id="sec1" data-scrollax-parent="true">

            <div class="slider-carousel-wrap full-height fullscreen-slider-wrap">
                <div class="fullscreen-slider full-height cur_carousel-slider-container fl-wrap"
                     data-slick='{"autoplay": true, "autoplaySpeed": 4000 , "pauseOnHover": false}'>

                    @foreach($sliders as $slider)
                        <!-- fullscreen-slider-item-->

                        <div class="fullscreen-slider-item full-height fl-wrap">
                            <div class="impulse-wrap">
                                <div class="mm-parallax">
                                    <div class="bg par-elem"
                                         data-bg="{{asset('uploads/sliders/'.$slider->image)}}"></div>
                                    <div class="overlay"></div>
                                    <div class="half-hero-wrap">
                                        <h1>{{$slider->title}}</h1>
                                        <h4>{{$slider->description}}</h4>
                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fullscreen-slider-item end-->
                    @endforeach
                </div>
                <div class="sp-cont   sp-cont-prev"><i class="fal fa-arrow-left"></i></div>
                <div class="sp-cont   sp-cont-next"><i class="fal fa-arrow-right"></i></div>
                <div class="fullscreenslider-counter"></div>
            </div>


            <!--hero dec end-->
        </div>
        <!-- hero-wrap end-->
        <!-- Content-->
        <div class="content">
            <!-- section-->
            <section data-scrollax-parent="true" id="sec2">
                <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }"><span>//</span>{{$en ? 'ABOUT US' : 'HAKKIMIZDA'}}
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="collage-image fl-wrap">
                                <div class="collage-image-title"
                                     data-scrollax="properties: { translateY: '150px' }">{{$about->title}}</div>
                                <img src="{{$about->image}}" class="respimg" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="main-about fl-wrap">
                                <h2>{{$about->main_title}}</h2>

                                <!-- features-box-container -->
                                <div class="features-box-container fl-wrap">
                                    <div class="row">

                                        <!--features-box -->
                                        <div class="features-box col-md-6">
                                            <div class="time-line-icon">
                                                <i class="fal fa-handshake"></i>
                                            </div>
                                            <h3>{{$about->collaboration_1_title}}</h3>
                                            <p>{{$about->collaboration_1_description}}  </p>
                                        </div>
                                        <!-- features-box end  -->

                                        <!--features-box -->
                                        <div class="features-box col-md-6">
                                            <div class="time-line-icon">
                                                <i class="fal fa-handshake"></i>
                                            </div>
                                            <h3>{{$about->collaboration_2_title}}</h3>
                                            <p>{{$about->collaboration_2_description}}  </p>
                                        </div>
                                        <!-- features-box end  -->
                                        <!--features-box -->
                                        <div class="features-box col-md-6">
                                            <div class="time-line-icon">
                                                <i class="fal fa-handshake"></i>
                                            </div>
                                            <h3>{{$about->collaboration_3_title}}</h3>
                                            <p>{{$about->collaboration_3_description}}  </p>
                                        </div>
                                        <!-- features-box end  -->
                                        <!--features-box -->
                                        <div class="features-box col-md-6">
                                            <div class="time-line-icon">
                                                <i class="fal fa-handshake"></i>
                                            </div>
                                            <h3>{{$about->collaboration_4_title}}</h3>
                                            <p>{{$about->collaboration_4_description}}  </p>
                                        </div>
                                        <!-- features-box end  -->
                                    </div>
                                </div>
                                <!-- features-box-container end  -->
                                <a href="{{route($en ? 'en.pages.collaboration' : 'pages.collaboration')}}" class="btn float-btn flat-btn color-btn">{{$en ? 'Our Collabrations' : 'İş Birliklerimiz'}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-parallax-module" data-position-top="90" data-position-left="25"
                     data-scrollax="properties: { translateY: '-250px' }"></div>
                <div class="bg-parallax-module" data-position-top="70" data-position-left="70"
                     data-scrollax="properties: { translateY: '150px' }"></div>
                <div class="sec-lines"></div>
            </section>
            <!-- section end-->
            <!-- section-->
            <section class="parallax-section dark-bg sec-half parallax-sec-half-right" id="sec3"
                     data-scrollax-parent="true">
                <div class="bg par-elem" data-bg="{{$numbers->image}}"
                     data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h2>{{$numbers->title}}</h2>
                        <p> {{$numbers->description}}  </p>
                        <div class="horizonral-subtitle"><span>{{$numbers->title}}</span></div>
                    </div>
                    <div class="fl-wrap facts-holder">
                        <!-- inline-facts -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="{{$numbers->number1}}">0</div>
                                    </div>
                                </div>
                                <a href="{{$numbers->number1_url}}" target="_blank"><h6>{{$numbers->number1_title}}</h6>
                                </a>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="{{$numbers->number2}}">0</div>
                                    </div>
                                </div>
                                <a href="{{$numbers->number2_url}}" target="_blank"><h6>{{$numbers->number2_title}}</h6>
                                </a>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="{{$numbers->number3}}">0</div>
                                    </div>
                                </div>
                                <a href="{{$numbers->number3_url}}" target="_blank"><h6>{{$numbers->number3_title}}</h6>
                                </a>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="{{$numbers->number4}}">0</div>
                                    </div>
                                </div>
                                <a href="{{$numbers->number4_url}}" target="_blank"><h6>{{$numbers->number4_title}}</h6>
                                </a>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                    </div>
                </div>
            </section>
            <!-- section end-->


            <!-- section-->
            <section data-scrollax-parent="true" id="sec4">
                <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }"><span>//</span>{{$en ? 'news' : 'Haberler '}}
                </div>
                <div class="container">
                    <!-- section-title -->
                    <div class="section-title fl-wrap">
                        <h2>   {!! $en ? 'ABOUT US <span>NEWS</span>' : 'Hakkımızda <span>Haberler</span>'  !!} </h2>
                        <p> {{$en ? 'All developments made about us publications and more' : 'Hakkımızda yapılan tüm gelişmeler yayınlar ve daha fazlası'}}</p>
                    </div>
                    <!-- section-title end -->
                    @foreach($news as $new)

                        <div class="team-box" style="height: 508px;">
                            <div class="team-photo">
                                <div class="overlay"></div>
                                <a href="{{route('pages.news.single',['id'=>$new->id])}}">{{$en ? 'Read More' : 'Detay'}}</a>
                                <img src="{{asset($new->image)}}" alt="" class="respimg">
                            </div>
                            <div class="team-info">
                                <h3>{{$new->title}}</h3>

                                <p>{{$new->description}}  </p>

                            </div>
                        </div>
                    @endforeach


                    <div class="fl-wrap mar-top">
                        <div class="srv-link-text">
                            <h4>{{$en ? 'Need more news:' : 'Daha fazla habere mi ihtiyacın var :'}} </h4>
                            <a href="{{route($en ? 'en.pages.news' :'pages.news')}}" class="btn float-btn flat-btn color-btn">{{$en ? 'News Archive' : 'Haber Arşivi'}}</a>
                        </div>
                    </div>
                </div>
                <div class="bg-parallax-module" data-position-top="90" data-position-left="30"
                     data-scrollax="properties: { translateY: '-150px' }"></div>
                <div class="bg-parallax-module" data-position-top="80" data-position-left="80"
                     data-scrollax="properties: { translateY: '350px' }"></div>
                <div class="sec-lines"></div>
            </section>
            <!-- section end -->


            <!--section -->
            <section data-scrollax-parent="true" class="parallax-section dark-bg sec-half parallax-sec-half-right"
                     id="sec5">
                <div class="bg par-elem"
                     data-bg="https://pilot.usak.edu.tr/storage/sayfa/August2022/WhatsApp%20Image%202022-08-04%20at%209.27.03%20AM.jpeg"
                     data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }">
                    {{$en ? 'Teams' : 'Ekibimiz'}}<span>//</span></div>
                <div class="container">
                    <div class="section-title fl-wrap">

                        <h2>{{$en ? 'Our Teammates' : 'Ekip Arkadaşlarımız'}}</h2>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!--slider-carousel-wrap -->
                <div class="slider-carousel-wrap text-carousel-wrap fl-wrap">
                    <div class="text-carousel-controls fl-wrap">
                        <div class="container">
                            <div class="sp-cont  sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
                            <div class="sp-cont   sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="text-carousel cur_carousel-slider-container fl-wrap">

                        @foreach($teams as $team)
                            <!--slick-item -->
                            <div class="slick-item">
                                <div class="text-carousel-item">
                                    <div class="popup-avatar"><img src="{{$team->image}}" alt=""></div>

                                    <div class="review-owner fl-wrap">{{$team->position}} {{$team->name}} - <span>{{$team->unit}} / {{$team->job}}</span>
                                    </div>
                                    <p> "{{$team->description}}"</p>
                                    <a target="_blank" href="{{$team->yok_link}}" class="testim-link">Yök Akademik</a>
                                    <a href="" class="testim-link">-</a>
                                    <a target="_blank" href="{{$team->linkedin_link}}"
                                       class="ms-5 testim-link">Linkedin</a>

                                </div>
                            </div>
                            <!--slick-item end -->
                        @endforeach
                    </div>
                </div>
                <!--slider-carousel-wrap end-->

                <div class="sec-lines"></div>
            </section>
            <!-- section end -->


            <!-- section-->
            <section data-scrollax-parent="true" id="sec6">
                <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }"><span>//</span>{{$en ? 'Activities' : 'Faaliyetler'}}
                </div>
                <div class="container">
                    <!-- section-title -->
                    <div class="section-title fl-wrap">
                        <h2><span>{{$en ? 'Our Activities' : 'Faaliyetlerimiz'}}</span></h2>
                        <p>{{$en ? 'Events and trainings' : 'Yapılan etkinlikler ve eğitimler'}}</p>
                    </div>
                    <!-- section-title end -->
                    @foreach($activities as $activity)

                        <div class="team-box" style="height: 508px;">
                            <div class="team-photo">
                                <div class="overlay"></div>
                                <a href="{{route('pages.activity.single',['id'=>$activity->id])}}">{{$en ? 'Read More' : 'Detay'}}</a>
                                <img src="{{asset($activity->image)}}" alt="" class="respimg">
                            </div>
                            <div class="team-info">
                                <h3>{{$activity->title}}</h3>
                                <h4>{{$activity->activityCategory->name}} </h4>
                                <p>{{$activity->description}}  </p>

                            </div>
                        </div>
                    @endforeach


                    <div class="fl-wrap mar-top">
                        <div class="srv-link-text">
                            <h4> {{$en ? 'Need more activities:' : 'Daha fazla aktiviteye mi ihtiyacın var :'}}</h4>
                            <a href="{{route($en ? 'en.pages.activity' : 'pages.activity')}}" class="btn float-btn flat-btn color-btn">{{$en ? 'Activity Archive' : 'Faaliyet Arşivi'}}</a>
                        </div>
                    </div>
                </div>
                <div class="bg-parallax-module" data-position-top="90" data-position-left="30"
                     data-scrollax="properties: { translateY: '-150px' }"></div>
                <div class="bg-parallax-module" data-position-top="80" data-position-left="80"
                     data-scrollax="properties: { translateY: '350px' }"></div>
                <div class="sec-lines"></div>
            </section>
            <!-- section end -->
        </div>
        <!-- Content end -->
        <!-- footer-->
        <div class="height-emulator fl-wrap"></div>
        @include('layouts.footer')
        <!-- footer end-->

    </div>
    <!--   content end -->
    <!-- share-wrapper -->
    <div class="share-wrapper isShare">
        <div class="share-title"><span>Share</span></div>
        <div class="close-share soa"><span>Close</span><i class="fal fa-times"></i></div>
        <div class="share-inner soa">
            <div class="share-container"></div>
        </div>
    </div>
    <!-- share-wrapper end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
