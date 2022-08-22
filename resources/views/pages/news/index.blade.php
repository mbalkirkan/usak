@extends('layouts.app')
@section('content')
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
@endsection
