<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Uşak Üniversitesi | {{$title ?? ''}}</title>
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
        <a class="logo-holder" href="{{route('index')}}">
            <img src="{{asset('assets/images/logo.png')}}" alt="{{$title ?? ''}}">
        </a>
        <!-- nav-button-wrap-->
        <div class="nav-button but-hol">
            <span class="nos"></span>
            <span class="ncs"></span>
            <span class="nbs"></span>
            <div class="menu-button-text">Menu</div>
        </div>
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
            <span>Share This</span>
        </div>
        <!--  showshare end -->
    </header>
    <!--  header end -->
    <!--  navigation bar -->
    <div class="nav-overlay">
        <div class="tooltip color-bg">Close Menu</div>
    </div>
    <div class="nav-holder">
        <a class="header-logo" href="index.html"><img src="images/logo2.png" alt=""></a>
        <div class="nav-title"><span>Menu</span></div>
        <div class="nav-inner-wrap">
            <nav class="nav-inner sound-nav" id="menu">
                <ul>
                    <li>
                        <a href="#" class="act-link">Home</a>
                        <!--level 2 -->
                        <ul>
                            <li><a href="index.html" class="act-link">Half Slider</a></li>
                            <li><a href="index2.html">Half Image</a></li>
                            <li><a href="index3.html">Impulse Image</a></li>
                            <li><a href="index4.html">Fullscreen Image</a></li>
                            <li><a href="index5.html">Fullscreen Slider</a></li>
                            <li><a href="index6.html">Slideshow</a></li>
                            <li><a href="index7.html">Fullscreen Carousel</a></li>
                            <li><a href="index8.html">Video</a></li>
                        </ul>
                        <!--level 2 end -->
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                        <!--level 2 -->
                        <ul>
                            <li><a href="portfolio.html">Masonry</a></li>
                            <li><a href="portfolio2.html">Masonry 2</a></li>
                            <li><a href="portfolio3.html">Boxed</a></li>
                            <li><a href="portfolio4.html">Boxed 2 </a></li>
                            <li><a href="portfolio5.html">Parallax</a></li>
                            <li><a href="portfolio6.html">Parallax dark</a></li>
                            <li><a href="portfolio7.html">Music</a></li>
                            <li><a href="portfolio8.html">List</a></li>
                            <li>
                                <a href="#">Single</a>
                                <!--level 3 -->
                                <ul>
                                    <li><a href="portfolio-single.html">Carousel</a></li>
                                    <li><a href="portfolio-single2.html">Carousel 2</a></li>
                                    <li><a href="portfolio-single3.html">Gallery</a></li>
                                    <li><a href="portfolio-single4.html">Gallery 2</a></li>
                                    <li><a href="portfolio-single5.html">Slider</a></li>
                                    <li><a href="portfolio-single6.html">Showcase</a></li>
                                    <li><a href="portfolio-single7.html">Fullscreen Slider</a></li>
                                    <li><a href="portfolio-single8.html">Video</a></li>
                                    <li><a href="portfolio-single9.html">Music Album</a></li>
                                </ul>
                                <!--level 3 end -->
                            </li>
                        </ul>
                        <!--level 2 end -->
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Pages</a>
                        <!--level 2 -->
                        <ul>
                            <li><a href="services2.html">Services 2</a></li>
                            <li><a href="blog-single.html">Blog single</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-single.html">Team Single</a></li>
                            <li><a href="coming-soon.html">Coming soon</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                        <!--level 2 end -->
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--  navigation bar end -->
    <!-- wrapper-->
    <div id="wrapper">
        <!-- scroll-nav-wrap-->
        <div class="scroll-nav-wrap">
            <div class="scroll-down-wrap">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Scroll Down</span>
            </div>
            <nav class="scroll-nav scroll-init">
                <ul>
                    <li><a class="scroll-link act-link" href="#sec1">Slider</a></li>
                    <li><a class="scroll-link" href="#sec2">Hakkımızda</a></li>
                    <li><a class="scroll-link" href="#sec3">İstatistikler</a></li>
                    <li><a class="scroll-link" href="#sec4">Haberler</a></li>
                    <li><a class="scroll-link" href="#sec5">Ekibimiz</a></li>
                    <li><a class="scroll-link" href="#sec6">Faaliyetlerimiz</a></li>
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
                                        {{--                            <h4>I create web and graphic design</h4>--}}
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
                <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }"><span>//</span>HAKKIMIZDA
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                    Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien
                                    vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur
                                    convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In
                                    fermentum facilisis massa, a consequat purus viverra.</p>
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
                                <a href="{{route('pages.collaboration')}}" class="btn float-btn flat-btn color-btn">İş Birliklerimiz</a>
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
            <section class="parallax-section dark-bg sec-half parallax-sec-half-right" id="sec3" data-scrollax-parent="true">
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
                                <h6>{{$numbers->number1_title}}</h6>
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
                                <h6>{{$numbers->number2_title}}</h6>
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
                                <h6>{{$numbers->number3_title}}</h6>
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
                                <h6>{{$numbers->number4_title}}</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                    </div>
                </div>
            </section>
            <!-- section end-->


            <!-- section-->
            <section data-scrollax-parent="true" id="sec4">
                <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }"><span>//</span>haberler
                </div>
                <div class="container">
                    <!-- section-title -->
                    <div class="section-title fl-wrap">
                        <h2>Hakkımızda <span>Haberler</span></h2>
                        <p>Hakkımızda yapılan tüm gelişmeler yayınlar ve daha fazlası </p>
                    </div>
                    <!-- section-title end -->
                    @foreach($news as $new)

                        <div class="team-box" style="height: 508px;">
                            <div class="team-photo">
                                <div class="overlay"></div>
                                <a href="{{route('pages.news.single',['id'=>$new->id])}}">Detay</a>
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
                            <h4>Daha fazla habere mi ihtiyacın var : </h4>
                            <a href="{{route('pages.news')}}" class="btn float-btn flat-btn color-btn">Haber Arşivi</a>
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
            <section data-scrollax-parent="true" class="parallax-section dark-bg sec-half parallax-sec-half-right" id="sec5">
                <div class="bg par-elem" data-bg="{{$numbers->image}}"
                     data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }">
                    Ekibimiz<span>//</span></div>
                <div class="container">
                    <div class="section-title fl-wrap">

                        <h2>Ekip Arkadaşlarımız</h2>
                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu
                            mi magna. Etiam suscipit commodo gravida. </p>
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

                                <div class="review-owner fl-wrap">{{$team->position}} {{$team->name}} - <span>{{$team->unit}} / {{$team->job}}</span></div>
                                <p> "{{$team->description}}"</p>
                                <a target="_blank" href="{{$team->yok_link}}" class="testim-link">Yök Akademik</a>
                                <a href="" class="testim-link">-</a>
                                    <a target="_blank" href="{{$team->linkedin_link}}" class="ms-5 testim-link">Linkedin</a>

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
                <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }"><span>//</span>Faaliyetler
                </div>
                <div class="container">
                    <!-- section-title -->
                    <div class="section-title fl-wrap">
                        <h2> <span>Faaliyetlerimiz</span></h2>
                        <p>Yapılan etkinlikler ve eğitimler</p>
                    </div>
                    <!-- section-title end -->
                    @foreach($activities as $activity)

                        <div class="team-box" style="height: 508px;">
                            <div class="team-photo">
                                <div class="overlay"></div>
                                <a href="{{route('pages.activity.single',['id'=>$activity->id])}}">Detay</a>
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
                            <h4>Daha fazla aktiviteye mi ihtiyacın var : </h4>
                            <a href="{{route('pages.activity')}}" class="btn float-btn flat-btn color-btn">Faaliyet Arşivi</a>
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
        <footer class="main-footer fixed-footer">
            <!--footer-inner-->
            <div class="footer-inner fl-wrap">
                <div class="container">
                    <div class="partcile-dec" data-parcount="90"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="footer-title fl-wrap">
                                <span>Solonick</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-header fl-wrap"><span>01.</span>Last Twitts</div>
                            <div class="footer-box fl-wrap">
                                <div class="twitter-swiper-container fl-wrap" id="twitts-container"></div>
                                <a href="#" class="btn float-btn trsp-btn">Follow</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-header fl-wrap"><span>02.</span> Subscribe / Contacts</div>
                            <!-- footer-box-->
                            <div class="footer-box fl-wrap">
                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and
                                    we'll send you a notification by email.</p>
                                <div class="subcribe-form fl-wrap">
                                    <form id="subscribe" class="fl-wrap">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="email"
                                               spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button"><i
                                                class="fal fa-paper-plane"></i> Send
                                        </button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                                <!-- footer-contacts-->
                                <div class="footer-contacts fl-wrap">
                                    <ul>
                                        <li><i class="fal fa-phone"></i><span>Phone :</span><a
                                                href="#">+489756412322</a></li>
                                        <li><i class="fal fa-envelope"></i><span>Email :</span><a href="#">yourmail@domain.com</a>
                                        </li>
                                        <li><i class="fal fa-map-marker"></i><span>Address</span><a href="#">USA 27TH
                                                Brooklyn NY</a></li>
                                    </ul>
                                </div>
                                <!-- footer end -->
                                <!-- footer-socilal -->
                                <div class="footer-socilal fl-wrap">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                </div>
                                <!-- footer-socilal end -->
                            </div>
                            <!-- footer-box end-->
                        </div>
                    </div>
                </div>
            </div>
            <!--footer-inne endr-->
            <!--subfooter-->
            <div class="subfooter fl-wrap">
                <div class="container">
                    <!-- policy-box-->
                    <div class="policy-box">
                        <span>&#169; Solonick 2018  /  All rights reserved. </span>
                    </div>
                    <!-- policy-box end-->
                    <a href="#" class="to-top color-bg"><i class="fal fa-angle-up"></i><span></span></a>
                </div>
            </div>
            <!--subfooter end-->
        </footer>
        <!-- footer end-->
        <!-- contact-btn -->
        <a class="contact-btn color-bg" href="contacts.html"><i
                class="fal fa-envelope"></i><span>Get in Touch</span></a>
        <!-- contact-btn end -->
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
