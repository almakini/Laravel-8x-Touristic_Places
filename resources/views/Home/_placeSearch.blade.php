<?php
use Monarobase\CountryList\CountryListFacade;


?>
@extends('layouts.main')

@section('title', 'Search a Place')

@section('description')
Discover The Beauty of Chad
@endsection

@section('keywords', 'tourism, contact us, Chad, Zakouma, Ounianga')

@section('top')
@include('Home._top')
@endsection

@section('content')
<div id="fh5co-contact" class="fh5co-section-gray">
    <div class="container">
        <form action="{{route('places')}}">
            <div class="row animate-box">
                <div class="">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Search a Tourist Attraction</h3>
                            <p></p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group animate-box">
                                <div class="text-center">
                                    <h3>Country</h3>
                                </div>
                                <select class="form-control text-center" placeholder="Country">
                                    <option>All</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country}}">{{$country}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group animate-box">
                                <div class="text-center">
                                    <h3>City</h3>
                                </div>
                                <input type="text" class="form-control text-center" placeholder="City">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group animate-box">
                                <div class="text-center">
                                    <h3>Category</h3>
                                </div>
                                <input type="text" class="form-control text-center" placeholder="Category">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group animate-box">
                                <input type="submit" value="Search" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="{{asset('assets')}}/images/tiger.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#">Planning for Vacation</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="{{asset('assets')}}/images/tiger.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#">Planning for Vacation</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="{{asset('assets')}}/images/tiger.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#">Planning for Vacation</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
