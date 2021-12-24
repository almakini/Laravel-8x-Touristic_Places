@extends('layouts.main')

@section('title', $settings->title)

@section('description')
{{$settings->description}}
@endsection

@section('keywords', 'tourism, Chad, Zakouma, Ounianga')

@section('top')
@include('Home._top')
@endsection
@yield('active', '')
@section('content')
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Most Visited Tourist Attractions</h3>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            @foreach($places as $place)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="{{route('place_detail', ['id'=>$place->id])}}">@if ($place->image)
                        <img class="img-responsive" style="height:300px;" src="{{Storage::url($place->image)}}" alt="">
                        @endif</a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="{{route('place_detail', ['id'=>$place->id])}}">{{$place->title}}</a></h3>
                            <span class="posted_by">{{$place->city}}, {{$place->country}}</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>{{$place->description}}</p>
                            <p><a href="{{route('place_detail', ['id'=>$place->id])}}">Learn More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
