<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Uşak Üniversitesi | @yield('title')</title>
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
            <img src="{{asset('assets/images/logo.png')}}" alt="@yield('title')">
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
    @include('layouts.menu')
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
                    <span>{{$en ? 'Scroll Down' : 'Aşağı Kaydır'}}</span>
                </div>
                <a href="{{route($en ? 'en.index' : 'index')}}" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span>{{$en ? 'Home Page' : 'Anasayfa'}}</span></a>
            </div>
            <!-- section-->
            <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
                <div class="bg par-elem" data-bg="@yield('image')"
                     data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="pattern-bg"></div>
                <div class="container">
                    <div class="section-title">
                        <h2>@yield('title')</h2>
                        <p> @yield('description') </p>
                        {{--                        <div class="horizonral-subtitle"><span>@yield('title')</span></div>--}}
                    </div>

                </div>
            </section>
            <!-- section end-->
            <!-- section end-->
            <section data-scrollax-parent="true" id="sec1">
                <div class="section-subtitle right-pos" data-scrollax="properties: { translateY: '-250px' }">
                    <span>//</span>{{$title ?? ''}}</div>
                <div class="container">
                    @yield('content')
                </div>
                <div class="bg-parallax-module" data-position-top="50" data-position-left="20"
                     data-scrollax="properties: { translateY: '-250px' }"></div>
                <div class="bg-parallax-module" data-position-top="40" data-position-left="70"
                     data-scrollax="properties: { translateY: '150px' }"></div>
                <div class="bg-parallax-module" data-position-top="80" data-position-left="80"
                     data-scrollax="properties: { translateY: '350px' }"></div>
                <div class="bg-parallax-module" data-position-top="95" data-position-left="40"
                     data-scrollax="properties: { translateY: '-550px' }"></div>
                <div class="sec-lines"></div>
            </section>
            <!-- section end-->
            <!-- section-->

            <!-- section end-->
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
