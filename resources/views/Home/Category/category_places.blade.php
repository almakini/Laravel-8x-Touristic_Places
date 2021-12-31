<?php
use Illuminate\Support\Facades\Route;

    $settings = \App\Http\Controllers\MainController::getSetting();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | ' . $category->title)

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div>
            Home / Places List / <a>
                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($category, $category->title)}}</a>
        </div><br><br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box fadeInUp animated">
                <h3>Popular {{$category->title}} Tourist Attractions</h3>
                <p></p>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            @foreach($places as $place)
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box fadeInUp animated" data-animate-effect="fadeIn">
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
        <div class="row">
            <div class="col-md-12 animate-box fadeInUp animated">
                <h2 class="heading-title">Travel Booking guide to book a perfect hotel</h2>
            </div>
            <div class="col-md-6 animate-box fadeInUp animated">
                <p>Far far away</p>
                <p>Nullam malesuada congue </p>
                <a href="#">Read More <i class="icon-arrow-right22"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
