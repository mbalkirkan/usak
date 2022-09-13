@extends('layouts.app')
@section('title', $en ? $page_settings->title_en : $page_settings->title )
@section('description',$en ? $page_settings->description_en:   $page_settings->description)
@section('image', $en ? $page_settings->image_en : $page_settings->image)
@section('content')
    @foreach($news as $new)

        <div class="team-box" style="height: 508px;">
            <div class="team-photo">
                <div class="overlay"></div>
                <a href="{{route($en ? 'en.pages.news.single' : 'pages.news.single',['id'=>$new->id])}}">{{$en ? 'Read More' : 'DETAY'}}</a>
                <img src="{{asset($new->image)}}" alt="" class="respimg">
            </div>
            <div class="team-info">
                <h3>{{$new->title}}</h3>

                <p>{{$new->description}}  </p>

            </div>
        </div>
    @endforeach
@endsection
