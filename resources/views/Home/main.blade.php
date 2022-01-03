@extends('layouts.main')

@section('title', $settings->title . '| Welcome!')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
@include('Home._slider')
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <form action="{{route('getplace')}}" method="post">
            @csrf
            @livewire('search')
            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
        </form>
        @livewireScripts
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Most Visited Tourist Attractions</h3>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            @foreach($mostVisited as $place)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">@if ($place->image)
                        <img class="img-responsive" style="height:300px;" src="{{Storage::url($place->image)}}" alt="">
                        @endif</a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a
                                    href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">{{$place->title}}</a>
                            </h3>
                            <span class="posted_by">{{$place->city}}, {{$place->country}}</span>
                            <div class="comment">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>(145)
                                <span><a href=""><i class="icon-bubble2"></i></a>21</span>
                            </div>
                            <p>{{$place->description}}</p>
                            <p><a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">Learn
                                    More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Best Places For Holidays</h3>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            @foreach($holidays as $place)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">@if ($place->image)
                        <img class="img-responsive" style="height:300px;" src="{{Storage::url($place->image)}}" alt="">
                        @endif</a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a
                                    href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">{{$place->title}}</a>
                            </h3>
                            <span class="posted_by">{{$place->city}}, {{$place->country}}</span>
                            <div class="comment">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>(145)
                                <span><a href=""><i class="icon-bubble2"></i></a>21</span>
                            </div>
                            <p>{{$place->description}}</p>
                            <p><a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">Learn
                                    More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
