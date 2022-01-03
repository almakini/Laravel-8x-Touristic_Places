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
    </div>
</div>
@endsection
