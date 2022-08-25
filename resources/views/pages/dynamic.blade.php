@extends('layouts.app')
@section('title', $dynamicPage->title)
@section('image', $dynamicPage->image)
@section('content')
    <div class="fl-wrap post-container">
        <div class="row">
            <div class="col-md-10">
                <!-- post -->
                <div class="post fl-wrap fw-post">
                    <h2><a href="{{route('pages.dynamic',['id'=>$dynamicPage->id])}}"><span>{{strtoupper( $dynamicPage->title)}}</span></a></h2>
                    <div class="parallax-header"><a href="#">{{$dynamicPage->updated_at->formatLocalized('%D')}}</a></div>
                    <!-- blog media -->
{{--                    <div class="blog-media fl-wrap nomar-bottom">--}}
{{--                        <div class="single-slider-wrap slider-carousel-wrap ">--}}
{{--                            <div class="single-slider cur_carousel-slider-container fl-wrap">--}}
{{--                                <div class="slick-slide-item"><img src="{{asset( $dynamicPage->image)}} " alt=""></div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- blog media end -->
                    <div class="parallax-header fl-wrap">
                        {{--                        <span>Tags : </span><a href="#">Branding</a> <a--}}
                        {{--                            href="#">Video</a> <a href="#">Design</a>--}}
                    </div>
                    <div class="blog-text fl-wrap ">
                        <div class="clearfix"></div>
                        {!! $dynamicPage->content !!}
                    </div>
                </div>
                <!-- post end-->

            </div>
            <!-- blog-sidebar  -->

            <!-- blog-sidebar end -->
            <div class="limit-box fl-wrap"></div>
        </div>
        <!-- content-nav -->

        <!-- content-nav end-->
    </div>
@endsection

@section('page_styles')
    <style>
        figure > img{
            max-width: 100%;
        }
        p{

            /*all: unset;*/

        }
    </style>
@endsection
