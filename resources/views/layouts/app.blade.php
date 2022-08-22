<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Uşak Üniversitesi | {{$title ?? ''}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    @yield('page_styles')
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
            <span  class="nos"></span>
            <span class="ncs"></span>
            <span class="nbs"></span>
            <div class="menu-button-text">Menu</div>
        </div>
        <!-- nav-button-wrap end-->
        <div class="header-social">
            <ul >
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
                        <a href="#">Home</a>
                        <!--level 2 -->
                        <ul>
                            <li><a href="index.html">Half Slider</a></li>
                            <li><a href="index2.html">Half Image</a></li>
                            <li><a href="index3.html">Impulse Image</a></li>
                            <li><a href="index4.html">Fullscreen  Image</a></li>
                            <li><a href="index5.html">Fullscreen  Slider</a></li>
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
                                    <li><a href="portfolio-single7.html">Fullscreen  Slider</a></li>
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
                        <a href="#" class="act-link">Pages</a>
                        <!--level 2 -->
                        <ul>
                            <li><a href="services2.html">Services 2</a></li>
                            <li><a href="blog-single.html">Blog single</a></li>
                            <li><a href="team.html" class="act-link">Team</a></li>
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
    <!--wrapper-->
    <div id="wrapper" class="single-page-wrap">
        <!-- Content-->
        <div class="content">
            <div class="single-page-decor"></div>
            <div class="single-page-fixed-row">
                <div class="scroll-down-wrap">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                    <span>Scroll Down</span>
                </div>
                <a href="{{route('index')}}" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span>Anasayfa</span></a>
            </div>
            <!-- section-->
            <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
                <div class="bg par-elem"  data-bg="{{$image ?? 'https://media.gettyimages.com/vectors/abstract-globe-background-vector-id1311148884?s=612x612'}}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="pattern-bg"></div>
                <div class="container">
                    <div class="section-title">
                        <h2>{{$title ?? 'Haberler'}}</h2>
                        <p> {{$description ?? 'Bölümümüz ile ilgili yayınlanan haberleri burdan bulabilirsiniz'}} </p>
                        <div class="horizonral-subtitle"><span>{{$title ?? 'Haberler'}}</span></div>
                    </div>

                </div>
            </section>
            <!-- section end-->
            <!-- section end-->
            <section data-scrollax-parent="true" id="sec1">
                <div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span>{{$title ?? ''}}</div>
                <div class="container">
                @yield('content')
                </div>
                <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
                <div class="sec-lines"></div>
            </section>
            <!-- section end-->
            <!-- section-->

            <!-- section end-->
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
                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                <div class="subcribe-form fl-wrap">
                                    <form id="subscribe" class="fl-wrap">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fal fa-paper-plane"></i> Send </button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                                <!-- footer-contacts-->
                                <div class="footer-contacts fl-wrap">
                                    <ul>
                                        <li><i class="fal fa-phone"></i><span>Phone :</span><a href="#">+489756412322</a></li>
                                        <li><i class="fal fa-envelope"></i><span>Email :</span><a href="#">yourmail@domain.com</a></li>
                                        <li><i class="fal fa-map-marker"></i><span>Address</span><a href="#">USA 27TH Brooklyn NY</a></li>
                                    </ul>
                                </div>
                                <!-- footer end -->
                                <!-- footer-socilal -->
                                <div class="footer-socilal fl-wrap">
                                    <ul >
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
        <a class="contact-btn color-bg" href="contacts.html"><i class="fal fa-envelope"></i><span>Get in Touch</span></a>
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