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
            @if($holidays->count() > 0)
            <div class="col-lg-12">
                <div id="carousel" class="carousel slide">
                    <div class="carousel-inner">
                        @php $places1 = $holidays->take(3); @endphp
                        <div class="item active carousel-item">
                            <div class="row">
                                @foreach($places1 as $place)
                                @include('Home._places')
                                @endforeach
                            </div>
                        </div>
                        @if($holidays->count() > 3)
                        @php $places2 = $holidays->skip(3)->take(3); @endphp
                        <div class="item carousel-item">
                            <div class="row">
                                @foreach($places2 as $place)
                                @include('Home._places')
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                    @if($holidays->count() > 3)
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
    <div id="fh5co-destination" style="padding:100px;">
        <div class="tour-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul id="fh5co-destination-list" class="animate-box fadeInUp animated">
                        <li class="one-third text-center"
                            style="background-image: url({{asset('assets')}}/images/place-1.jpg); ">
                            <a href="{{route('destination_places', ['city'=>'Los Angeles'])}}">
                                <div class="case-studies-summary">
                                    <h2>Los Angeles</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third text-center"
                            style="background-image: url({{asset('assets')}}/images/place-2.jpg); ">
                            <a href="{{route('destination_places', ['city'=>'Istanbul'])}}">
                                <div class="case-studies-summary">
                                    <h2>Istanbul</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third text-center"
                            style="background-image: url({{asset('assets')}}/images/place-3.jpg); ">
                            <a href="{{route('destination_places', ['city'=>'Rome'])}}">
                                <div class="case-studies-summary">
                                    <h2>Rome</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-third text-center"
                            style="background-image: url({{asset('assets')}}/images/place-5.jpg); ">
                            <a href="{{route('destination_places', ['city'=>'Shangai'])}}">
                                <div class="case-studies-summary">
                                    <h2>Shangai</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third text-center">
                            <div class="title-bg">
                                <div class="case-studies-summary">
                                    <h2>Most Popular Destinations</h2>
                                </div>
                            </div>
                        </li>
                        <li class="one-third text-center"
                            style="background-image: url({{asset('assets')}}/images/place-6.jpg); ">
                            <a href="{{route('destination_places', ['city'=>'Paris'])}}">
                                <div class="case-studies-summary">
                                    <h2>Paris</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third text-center"
                            style="background-image: url({{asset('assets')}}/images/place-7.jpg); ">
                            <a href="{{route('destination_places', ['city'=>'Gize'])}}">
                                <div class="case-studies-summary">
                                    <h2>Gize</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third text-center"
                            style="background-image: url({{asset('assets')}}/images/place-8.jpg); ">
                            <a href="{{route('destination_places', ['city'=>'Kigali'])}}">
                                <div class="case-studies-summary">
                                    <h2>Kigali</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third text-center"
                            style="background-image: url({{asset('assets')}}/images/place-9.jpg); ">
                            <a href="{{route('destination_places', ['city'=>'Dubai'])}}">
                                <div class="case-studies-summary">
                                    <h2>Dubai</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br><br>
    <div style="text-align:center">
        <a class="btn btn-primary" href="{{route('user_place_add')}}">Add a place</a>
    </div>
</div>
@endsection
