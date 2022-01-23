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
                                <div class="col-lg-3"><a href="#" class="thumbnail"><img
                                            src="http://placehold.it/250x250/00f" alt="Image"
                                            style="max-width:100%;"></a>
                                </div>
                                <div class="col-lg-3"><a href="#" class="thumbnail"><img
                                            src="http://placehold.it/250x250/00f" alt="Image"
                                            style="max-width:100%;"></a>
                                </div>
                                <div class="col-lg-3"><a href="#" class="thumbnail"><img
                                            src="http://placehold.it/250x250/00f" alt="Image"
                                            style="max-width:100%;"></a>
                                </div>
                                <div class="col-lg-3"><a href="#" class="thumbnail"><img
                                            src="http://placehold.it/250x250/00f" alt="Image"
                                            style="max-width:100%;"></a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-lg-3"><a href="#" class="thumbnail"><img
                                            src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                </div>
                                <div class="col-lg-3"><a href="#" class="thumbnail"><img
                                            src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                </div>
                                <div class="col-lg-3"><a href="#" class="thumbnail"><img
                                            src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                </div>
                                <div class="col-lg-3"><a href="#" class="thumbnail"><img
                                            src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
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
