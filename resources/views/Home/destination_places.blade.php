<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | Places')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('js')
<style>


</style>
@endsection
@section('content')
<div id="fh5co-contact" class="fh5co-section-gray" style="margin-top:150px">
    <div class="container">
        <div>
            <a href="{{route('home')}}">Home </a>
            / Places in {{$city}}
        </div><br><br>
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>Places That You Can Visit In {{$city}}</h3>
            <p></p>
        </div>
        <div class="row">
            @if($places->count() > 0)
            <div class="col-lg-12">
                <div id="carousel" class="carousel slide">
                    <!-- carousel items -->
                    <div class="carousel-inner">
                        @php $places1 = $places->take(3); @endphp
                        <div class="item active carousel-item">
                            <div class="row">
                                @foreach($places1 as $place)
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
                        @if($places->count() > 3)
                        @php $places2 = $places->skip(3)->take(3); @endphp
                        <!--.item-->
                        <div class="item carousel-item">
                            <div class="row">
                                @foreach($places2 as $place)
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
                        </div>
                        @endif
                    </div>
                    @if($places->count() > 3)
                    <!--.carousel-inner--><a data-slide="prev" href="#carousel" class="left carousel-control"
                        style="margin-top:150px;">&#x2039;</a>
                    <a data-slide="next" href="#carousel" class="right carousel-control"
                        style="margin-top:150px;">&#x203A;</a>
                    @endif
                </div>
                <!--.carousel-->
            </div>
            @else
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>There is not any place in this category.</h3>
                <p></p>
                <div style="text-align:center">
                    <a class="btn btn-primary" href="{{route('user_place_add')}}">Add a place</a>
                </div>
            </div>
            @endif
        </div><br><br>
        @if($mostVisited->count() != 0)
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
                @if($mostVisited->count() > 0)
                <div class="col-lg-12">
                    <div id="carousel" class="carousel slide">
                        <div class="carousel-inner">
                            @php $places1 = $mostVisited->take(3); @endphp
                            <div class="item active carousel-item">
                                <div class="row">
                                    @foreach($places1 as $place)
                                    @include('Home._places')
                                    @endforeach
                                </div>
                            </div>
                            @if($mostVisited->count() > 3)
                            @php $places2 = $mostVisited->skip(3)->take(3); @endphp
                            <div class="item carousel-item">
                                <div class="row">
                                    @foreach($places2 as $place)
                                    @include('Home._places')
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                        @if($mostVisited->count() > 3)
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
    </div>
    <div style="text-align:center">
        <a class="btn btn-primary" href="{{route('user_place_add')}}">Add a place</a>
    </div>
</div>
<script>

</script>
<!--.container-->
@endsection
