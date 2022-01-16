@extends('layouts.main')

@section('title', $settings->title . ' | Welcome!')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div>
    @include('Home._slider')
</div>
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
            @foreach($mostVisited as $place)
            @php
            $countRev = \App\Http\Controllers\MainController::countReviews($place->id);
            $avgRev = \App\Http\Controllers\MainController::avgReviews($place->id);
            @endphp
            <div class="col-lg-4 col-md-4 col-sm-6" style="">
                <div class="fh5co-blog animate-box">
                    <a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">@if ($place->image)
                        <img class="img-responsive" style="height:300px;" src="{{Storage::url($place->image)}}" alt="">
                        @endif</a>
                    <div class="blog-text myHeight">
                        <div class="prod-title">
                            <h3><a
                                    href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">{{$place->title}}</a>
                            </h3>
                            <div class="posted_by">{{$place->city}}, {{$place->country}}</div><br>
                            <div class="comment">
                                <span class="fa fa-star @if ($avgRev >= 1) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 2) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 3) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 4) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 5) checked @endif"></span>({{$countRev}}
                                @if ($countRev < 2) review @else reviews @endif) <span><a href=""><i
                                            class="icon-bubble2"></i></a>{{$countRev}}</span>
                            </div>
                            <div>
                                <p>{!!$place->description!!}</p>
                                <p><a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">Learn
                                        More...</a></p>
                            </div>
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
            @php
            $countRev = \App\Http\Controllers\MainController::countReviews($place->id);
            $avgRev = \App\Http\Controllers\MainController::avgReviews($place->id);
            @endphp
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">@if ($place->image)
                        <img class="img-responsive" style="height:300px;" src="{{Storage::url($place->image)}}" alt="">
                        @endif</a>
                    <div class="blog-text myHeight">
                        <div class="prod-title">
                            <h3><a
                                    href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">{{$place->title}}</a>
                            </h3>
                            <div class="posted_by">{{$place->city}}, {{$place->country}}</div><br>
                            <div class="comment">
                                <span class="fa fa-star @if ($avgRev >= 1) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 2) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 3) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 4) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 5) checked @endif"></span>({{$countRev}}
                                @if ($countRev < 2) review @else reviews @endif) <span><a href=""><i
                                            class="icon-bubble2"></i></a>{{$countRev}}</span>
                            </div>
                            <div>
                                <p>{!!$place->description!!}</p>
                                <p><a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">Learn
                                        More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
