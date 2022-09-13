@extends('layouts.app')
@section('title', $en ? $page_settings->title_en : $page_settings->title )
@section('description',$en ? $page_settings->description_en:   $page_settings->description)
@section('image', $en ? $page_settings->image_en : $page_settings->image)
@section('content')
    <div class="fl-wrap post-container">
        <div class="row">
            <div class="col-md-8">
                <!-- post -->
                <div class="post fl-wrap fw-post">
                    <h2><a href="{{route($en ? 'en.pages.activity.single' : 'pages.activity.single',['id'=>$activity->id])}}"><span>{{strtoupper( $activity->title)}}</span></a></h2>
                    <div class="parallax-header"><a href="#">{{$activity->updated_at->formatLocalized('%D')}}</a> <span>{{$en ?$activity->activityCategory->en_name : $activity->activityCategory->name}}</span></div>
                    <!-- blog media -->
                    <div class="blog-media fl-wrap nomar-bottom">
                        <div class="single-slider-wrap slider-carousel-wrap ">
                            <div class="single-slider cur_carousel-slider-container fl-wrap">
                                <div class="slick-slide-item"><img src="{{asset( $activity->image)}} " alt=""></div>
                            </div>

                        </div>
                    </div>
                    <!-- blog media end -->
                    <div class="parallax-header fl-wrap">
                        {{--                        <span>Tags : </span><a href="#">Branding</a> <a--}}
                        {{--                            href="#">Video</a> <a href="#">Design</a>--}}
                    </div>
                    <div class="blog-text fl-wrap ">
                        <div class="clearfix"></div>
                        {!! $activity->content !!}
                    </div>
                </div>
                <!-- post end-->

            </div>
            <!-- blog-sidebar  -->
            <div class="col-md-4">
                <div class="blog-sidebar fl-wrap fixed-bar">
                    <!-- widget-wrap -->
                    <div class="widget-wrap fl-wrap">
                        <h4 class="widget-title"><span>01.</span> {{$en ? 'Recent Events' : 'Son Etkinlikler'}}</h4>
                        <div class="widget-container fl-wrap">
                            <div class="widget-posts fl-wrap">
                                <ul>
                                    @foreach($activities as $news)
                                        <li class="clearfix">
                                            <a href="{{route($en ? 'en.pages.activity.single' : 'pages.activity.single',['id'=>$news->id])}}" class="widget-posts-img"><img src="{{$news->image}}"
                                                                                                                                              class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="{{route($en ? 'en.pages.activity.single' : 'pages.activity.single',['id'=>$news->id])}}" title="">{{$news->title}}</a>
                                                <span class="widget-posts-date"> {{$news->updated_at->formatLocalized('%D')}} </span>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- widget-wrap end  -->

                </div>
            </div>
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
