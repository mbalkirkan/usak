<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Uşak Üniversitesi | {{$page_settings->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
@include('layouts.menu')
    <!--wrapper-->
    <div id="wrapper" class="single-page-wrap">
        <!-- Content-->
        <div class="content">
            <div class="single-page-decor"></div>
            <!-- filter-->
            <div class="fsp-filter">
                <div class="filter-title"><i class="fal fa-filter"></i><span>Portfolio Filter</span></div>
                <div class="gallery-filters">
                    <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">Hepsi</a>
                    @foreach($categories as $category)
                        <a href="#" class="gallery-filter" data-filter=".{{strtolower($category->name)}}">{{$category->name}}</a>
                    @endforeach

                </div>
                <div class="folio-counter">
                    <div class="num-album"></div>
                    <div class="all-album"></div>
                </div>
            </div>
            <!-- filter end -->
            <!-- section-->
            <section class="no-padding dark-bg">
                <!-- portfolio start -->
                <div class="gallery-items min-pad hde four-column">
                    @foreach($activities as $activity)
                    <!-- gallery-item-->
                    <div class="gallery-item {{strtolower($activity->activityCategory->name)}}">
                        <div class="grid-item-holder">
                            <a href="{{$activity->image}}" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                            <img  src="{{$activity->image}}"    alt="">
                            <div class="box-item hd-box">
                                <div class=" fl-wrap full-height">
                                    <div class="hd-box-wrap">
                                        <h2><a href="{{route('pages.activity.single',['id'=>$activity->id])}}">{{$activity->title}}</a></h2>
                                        <p><a href="#">{{$activity->activityCategory->name}}  </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    @endforeach
                </div>
                <!-- portfolio end -->
            </section>
            <!-- section end-->
            <!-- section-->
            <section class="dark-bg2 small-padding order-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">

                        </div>

                    </div>
                </div>
            </section>
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