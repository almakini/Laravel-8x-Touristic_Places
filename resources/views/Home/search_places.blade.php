<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | Places List')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('js')
<style>
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
                <h3>There is not any place for this search.</h3>
                <p></p>
                <div style="text-align:center">
                    <a class="btn btn-primary" href="{{route('user_place_add')}}">Add a place</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#carousel').carousel({
        interval: 500000
    })
});
</script>
<!--.container-->
@endsection
