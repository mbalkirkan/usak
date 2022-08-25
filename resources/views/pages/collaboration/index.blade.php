@extends('layouts.app')
@section('title', $page_settings->title)
@section('description', $page_settings->description)
@section('image', $page_settings->image)
@section('content')
    <div class="serv-carousel-wrap slider-carousel-wrap fl-wrap">
        <div class="sp-cont  sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
        <div class="sp-cont   sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
        <!-- serv-carousel -->
        <div class="serv-carousel fl-wrap cur_carousel-slider-container">
            @foreach($collaborations as $item)
            <!-- serv-carousel-item -->
            <div class="serv-carousel-item">
                <div class="serv-wrap fl-wrap">
                    <div class="time-line-icon">
                        <i class="fal fa-handshake"></i>
                    </div>
                    <h4>{{$item->title}}</h4>
                    <div class="process-details">
                        <div class="serv-img">
                            <img src="{{$item->image}}" alt="">
                            <a href="{{$item->image}}" class="serv-zoom   image-popup"><i class="fal fa-search"></i></a>
                        </div>
                        <br>
                        <p>{{$item->description}}</p>
                        <br>
                        <div class="clearfix hr"></div>
                        <a href="{{route('pages.collaboration.single',['id'=>$item->id])}}" class="btn color-bg">DETAY</a>
                    </div>
                    <span class="process-numder">{{$loop->iteration}}.</span>
                </div>
            </div>
            <!-- serv-carousel-item end -->
            @endforeach

        </div>
        <!-- serv-carousel  end-->
    </div>
@endsection
