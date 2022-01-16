@extends('layouts.main')

@section('title', $place->title . ' | Detail')

@section('description')
{{$place->description}}
@endsection

@section('keywords', '{{$place->keywords}}')

@section('content')
<div id="fh5co-blog-section" class="fh5co-section-gray ">
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
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($images as $key=>$rs)
                    <div class="item {{$key === 0 ? 'active' : '' }}">
                        <a href="#"><img src="{{Storage::url($rs->image)}}" class="" width="100%" height="100%"
                                alt=""></a>
                        <div class="carousel-caption">

                        </div>
                    </div>
                    @endforeach
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
                            @endphp
                            <span class="posted_by">{{$place->city}}, {{$place->country}}</span>
                            <span class="comment">
                                <span class="fa fa-star @if ($avgRev >= 1) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 2) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 3) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 4) checked @endif"></span>
                                <span class="fa fa-star @if ($avgRev >= 5) checked @endif"></span>({{$countRev}}
                                @if ($countRev < 2) review @else reviews @endif) <span><a href="#comments"><i
                                            class="icon-bubble2"></i></a>{{$countRev}}</span>
                            </span>
                            <p><i>{!!$place->description!!}</i></p>
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
    </div>
</div>
@endsection
