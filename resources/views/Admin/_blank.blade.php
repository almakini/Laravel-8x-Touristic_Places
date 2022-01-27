<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | ' . $category->title)

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div id="fh5co-tours" class="fh5co-section-gray" style="margin-top:150px">
    <div class="container">
        <div>
            Home / Places List / <a>
                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($category, $category->title)}}</a>
        </div><br><br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box fadeInUp animated">
                <h3>{{$category->title}} Tourist Attractions</h3>
                <p></p>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            @foreach($places as $place)
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box fadeInUp animated" data-animate-effect="fadeIn">
                <div href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}"><img
                        src="{{Storage::url($place->image)}}" alt="" class="img-responsive myBox" width="100%"
                        height="100%">
                    <div class="desc">
                        <span></span>
                        <h3 class="price">{{$place->title}}</h3>
                        <span class="">{{$place->country}}, {{$place->city}}</span>
                        <a class="btn btn-primary btn-outline"
                            href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">Discover More<i
                                class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div style="text-align:center">
        <a class="btn btn-primary" href="{{route('user_place_add')}}">Add a place</a>
    </div>
</div>
@endsection





<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | Contact Us')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('css')
<style>
/* body {
    padding-top: 20px;
} */

.carousel {
    margin-bottom: 0;
    padding: 0 40px 30px 40px;
}

/* The controlsy */
.carousel-control {
    left: -12px;
    height: 40px;
    width: 40px;
    background: none repeat scroll 0 0 #222222;
    border: 4px solid #FFFFFF;
    border-radius: 23px 23px 23px 23px;
    margin-top: 90px;
}

.carousel-control.right {
    right: -12px;
}

/* The indicators */
.carousel-indicators {
    right: 50%;
    top: auto;
    bottom: -10px;
    margin-right: -19px;
}

/* The colour of the indicators */
.carousel-indicators li {
    background: #cecece;
}

.carousel-indicators .active {
    background: #428bca;
}

</style>
@endsection

@section('content')
<div id="fh5co-contact" class="fh5co-section-gray" style="margin-top:150px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="Carousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="row">
                                @foreach($places as $place)
                                <div class="col-md-4 col-sm-6 fh5co-tours animate-box fadeInUp animated"
                                    data-animate-effect="fadeIn">
                                    <div href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}"><img
                                            src="{{Storage::url($place->image)}}" alt="" class="img-responsive myBox"
                                            width="100%" height="100%">
                                        <div class="desc">
                                            <span></span>
                                            <h3 class="price">{{$place->title}}</h3>
                                            <span class="">{{$place->country}}, {{$place->city}}</span>
                                            <a class="btn btn-primary btn-outline"
                                                href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">Discover
                                                More<i class="icon-arrow-right22"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-lg-3"><a href="#" class="thumbnail"></a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                    </div>
                    <!--.carousel-inner--><a data-slide="prev" href="#Carousel" class="left carousel-control"
                        style="margin-top:150px;">&#x2039;</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control"
                        style="margin-top:150px;">&#x203A;</a>
                </div>
                <!--.Carousel-->
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 500000
    })
});
</script>
<!--.container-->
@endsection


<!-- Main -->
@extends('layouts.main')

@section('title', $settings->title . ' | Welcome!')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div class="pb-100" style=" margin-top:150px">
    @include('Home._slider')
</div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div style="text-align:center">
        <a class="btn btn-primary" href="{{route('user_place_add')}}">Add a place</a>
    </div><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>The Most Visited Tourist Attractions</h3>
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
            $countLikes = \App\Http\Controllers\MainController::countLikes($place->id);

            $checkLike = \App\Http\Controllers\MainController::checkLike($place->id);
            @endphp

            <div class="col-lg-4 col-md-4 col-sm-6" style="">
                <div class="fh5co-blog animate-box">
                    <a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">@if ($place->image)
                        <img class="img-responsive" style="height:280px;" src="{{Storage::url($place->image)}}" alt="">
                        @endif</a>
                    <div class="blog-text myHeight">
                        <div class="prod-title">
                            <h3><a
                                    href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">{{$place->title}}</a>
                                <span class="comment">
                                    @auth
                                    @if($checkLike > 0)
                                    <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>0])}}">
                                        <i id="myForm" class="fa fa-heart" style="font-size:25px;"></i></a>
                                    @else
                                    <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>1])}}">
                                        <i id="myForm" class="fa fa-heart-o" style="font-size:25px;"></i></a>
                                    @endif
                                    @else
                                    <a href="{{route('login')}}">
                                        <i id="myForm" class="fa fa-heart-o" style="font-size:25px;"></i></a>
                                    @endauth
                                    &nbsp;
                                    <span style="font-size:20px;">{{$countLikes}}</span>

                                </span>
                            </h3>

                            <div class=" posted_by">{{$place->city}}, {{$place->country}}
                            </div><br>
                            <div class="comment">
                                <span class="fa fa-star @if ($avgRev >= 1) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 2) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 3) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 4) checked @endif"></span>
                                <span
                                    class="fa fa-star @if ($avgRev >= 5) checked @endif"></span>&nbsp;&nbsp;&nbsp;({{$countRev}}
                                @if ($countRev < 2) review @else reviews @endif) </div>
                                    <div>
                                        <p><a
                                                href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">
                                                Discover More...</a></p>
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
                $countLikes = \App\Http\Controllers\MainController::countLikes($place->id);
                $checkLike = \App\Http\Controllers\MainController::checkLike($place->id);
                @endphp

                <div class="col-lg-4 col-md-4 col-sm-6" style="">
                    <div class="fh5co-blog animate-box">
                        <a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">
                            @if($place->image)
                            <img class="img-responsive" style="height:300px;" src="{{Storage::url($place->image)}}"
                                alt="">
                            @endif</a>
                        <div class="blog-text myHeight">
                            <div class="prod-title">
                                <h3><a
                                        href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">{{$place->title}}</a>
                                    <span class="comment">
                                        @auth
                                        @if($checkLike > 0)
                                        <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>0])}}">
                                            <i id="myForm" class="fa fa-heart" style="font-size:25px;"></i></a>
                                        @else
                                        <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>1])}}">
                                            <i id="myForm" class="fa fa-heart-o" style="font-size:25px;"></i></a>
                                        @endif
                                        @else
                                        <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>0])}}">
                                            <i id="myForm" class="fa fa-heart-o" style="font-size:25px;"></i></a>
                                        @endauth
                                        &nbsp;
                                        <span style="font-size:20px;">{{$countLikes}}</span>

                                    </span>
                                </h3>

                                <div class=" posted_by">{{$place->city}}, {{$place->country}}
                                </div><br>
                                <div class="comment">
                                    <span class="fa fa-star @if ($avgRev >= 1) checked @endif"></span>
                                    <span class="fa fa-star @if ($avgRev >= 2) checked @endif"></span>
                                    <span class="fa fa-star @if ($avgRev >= 3) checked @endif"></span>
                                    <span class="fa fa-star @if ($avgRev >= 4) checked @endif"></span>
                                    <span
                                        class="fa fa-star @if ($avgRev >= 5) checked @endif"></span>&nbsp;&nbsp;&nbsp;({{$countRev}}
                                    @if ($countRev < 2) review @else reviews @endif) </div>
                                        <div>
                                            <p><a
                                                    href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">Discover
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
    </div>

    @endsection
