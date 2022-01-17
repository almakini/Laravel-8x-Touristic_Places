<?php
use Illuminate\Support\Facades\Route;

    $settings = \App\Http\Controllers\MainController::getSetting();
?>

@extends('layouts.main')

@section('title'. $search. ' Places List')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div>
            <a href="{{route('home')}}">Home </a>/
            <a href="{{$search}}">{{$search}} Places List</a>
        </div><br><br>

        <div class="row row-bottom-padded-md">
            @foreach($places as $place)
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box fadeInUp animated myBox" data-animate-effect="fadeIn">
                <div href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}"><img
                        src="{{Storage::url($place->image)}}" alt="" class="img-responsive" width="100%" height="100%">
                    <div class="desc">
                        <span></span>
                        <h3 class="price">{{$place->title}}</h3>
                        <span>{{$place->description}}</span>
                        <span class="">{{$place->country}}, {{$place->city}}</span>
                        <a class="btn btn-primary btn-outline"
                            href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">Read More<i
                                class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection











<div class="col-lg-4 col-md-4 col-sm-6">
    <div class="fh5co-blog animate-box">
        <a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">@if ($place->image)
            <img class="img-responsive" style="height:300px;" src="{{Storage::url($place->image)}}" alt="">
            @endif</a>
        <div class="blog-text myHeight">
            <div class="prod-title">
                <h3><a href="{{route('place_detail', ['id'=>$place->id, 'slug'=>$place->slug])}}">{{$place->title}}</a>
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
