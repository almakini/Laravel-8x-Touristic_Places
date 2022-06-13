@extends('layouts.main')

@section('title', $place->title . ' | Detail')

@section('description')
{{$place->description}}
@endsection

@section('keywords', '{{$place->keywords}}')

@section('content')
<div id="" class="fh5co-section-gray" style="margin-top:150px">
    <div class="container" style="width:95%">
        <div>
            <a href="{{route('home')}}">Home </a>
            / Place Detail : {{$place->title}}
        </div><br><br>
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>{{$place->title}}</h3>
            <p></p>
        </div>
        <div class="text-center">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    @php $c = $images->count() - 1; @endphp
                    @for($i = 0; $i < $c; $i++) <li data-target="#myCarousel" data-slide-to="1">
                        </li>
                        @endfor
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($images as $key=>$rs)
                    <div class="item {{$key === 0 ? 'active' : '' }}">
                        <a href="#"><img src="{{Storage::url($rs->image)}}" class="" width="100%" alt=""
                                style="  height:85vh" alt=""></a>
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="">
                <div class="fh5co-blog animate-box">
                    <div class="blog-text">
                        <div class="prod-title">
                            @php
                            $countRev = \App\Http\Controllers\MainController::countReviews($place->id);
                            $avgRev = \App\Http\Controllers\MainController::avgReviews($place->id);
                            $countLikes = \App\Http\Controllers\MainController::countLikes($place->id);
                            $checkLike = \App\Http\Controllers\MainController::checkLike($place->id);
                            @endphp
                            <span class="posted_by">{{$place->city}}, {{$place->country}}</span>
                            <span class="comment">
                                <span class="fa fa-star @if ($avgRev >= 1) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 2) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 3) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 4) checked @endif"></span>
                                <span
                                    class="fa fa-star @if ($avgRev >= 5) checked @endif"></span>&nbsp;&nbsp;({{$countRev}}
                                @if ($countRev < 2) review @else reviews @endif) @auth @if($checkLike> 0)
                                    <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>0])}}">
                                        <i id="myForm" class="fa fa-heart" style="font-size:20px;"></i></a>
                                    @else
                                    <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>1])}}">
                                        <i id="myForm" class="fa fa-heart-o" style="font-size:20px;"></i></a>
                                    @endif
                                    @else
                                    <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>0])}}">
                                        <i id="myForm" class="fa fa-heart-o" style="font-size:20px;"></i></a>
                                    @endauth
                                    &nbsp;
                                    <span style="font-size:20px;">{{$countLikes}}</span>
                            </span>
                            <p><i class="glyphicon glyphicon-map-marker"></i>&nbsp;&nbsp;{{$place->address}}</p>
                            <p>{!!$place->detail!!}</p><br><br>
                            <h2 id="comments">Reviews</h2>
                        </div>
                        <div class="row">
                            @foreach($reviews as $rs)
                            <div class="col-md-11">
                                <div class="box-testimony animate-box"><br>
                                    <hr>
                                    <p class="author" style="margin:auto">
                                        <span style="font-size:2rem;"><b>{{$rs->user->name}}</b></span> &nbsp;&nbsp;
                                        <span class="subtext" style="margin:auto">{{$rs->created_at}}</span><br>
                                        <span class="">
                                            <span class="fa fa-star @if ($rs->rate >= 1) checked @endif"></span>
                                            <span class="fa fa-star @if ($rs->rate >= 2) checked @endif"></span>
                                            <span class="fa fa-star @if ($rs->rate >= 3) checked @endif"></span>
                                            <span class="fa fa-star @if ($rs->rate >= 4) checked @endif"></span>
                                            <span class="fa fa-star @if ($rs->rate >= 5) checked @endif"></span>
                                        </span><br>
                                    <h4>{!!$rs->subject!!}</h4>
                                    <blockquote>
                                        <p>{!!$rs->review!!}</p>
                                    </blockquote>
                                    </p>
                                </div><br>
                            </div>
                            @endforeach<br>
                            <div class="col-md-10">
                                <h3>Write Your Review</h3>
                                @livewire('review', ['id' => $place->id])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($hotels->count() != 0)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Hotels in {{$place->city}}</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">
                @if($hotels->count() > 0)
                <div class="col-lg-12">
                    <div id="carousel" class="carousel slide">
                        <div class="carousel-inner">
                            @php $places1 = $hotels->take(3); @endphp
                            <div class="item active carousel-item">
                                <div class="row">
                                    @foreach($places1 as $place)
                                    @include('Home._places')
                                    @endforeach
                                </div>
                            </div>
                            @if($hotels->count() > 3)
                            @php $places2 = $hotels->skip(3)->take(3); @endphp
                            <div class="item carousel-item">
                                <div class="row">
                                    @foreach($places2 as $place)
                                    @include('Home._places')
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                        @if($hotels->count() > 3)
                        <a data-slide="prev" href="#carousel" class="left carousel-control"
                            style="margin-top:281px; height:35px; width: 30px;">&#x2039;</a>
                        <a data-slide="next" href="#carousel" class="right carousel-control"
                            style="margin-top:281px; height:35px; width: 30px;">&#x203A;</a>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif
        @if($sameCat->count() != 0)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Places You Might Want To Visit</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">
                @if($sameCat->count() > 0)
                <div class="col-lg-12">
                    <div id="carousel" class="carousel slide">
                        <div class="carousel-inner">
                            @php $places1 = $sameCat->take(3); @endphp
                            <div class="item active carousel-item">
                                <div class="row">
                                    @foreach($places1 as $place)
                                    @include('Home._places')
                                    @endforeach
                                </div>
                            </div>
                            @if($sameCat->count() > 3)
                            @php $places2 = $sameCat->skip(3)->take(3); @endphp
                            <div class="item carousel-item">
                                <div class="row">
                                    @foreach($places2 as $place)
                                    @include('Home._places')
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                        @if($sameCat->count() > 3)
                        <a data-slide="prev" href="#carousel" class="left carousel-control"
                            style="margin-top:281px; height:35px; width: 30px;">&#x2039;</a>
                        <a data-slide="next" href="#carousel" class="right carousel-control"
                            style="margin-top:281px; height:35px; width: 30px;">&#x203A;</a>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif
        <div style="text-align:center">
            <a class="btn btn-primary" href="{{route('user_place_add')}}">Add a place</a>
        </div><br><br>
    </div>
</div>
@endsection
