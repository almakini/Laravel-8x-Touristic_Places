<?php
use Illuminate\Support\Facades\Route;

    $settings = \App\Http\Controllers\MainController::getSetting();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | Contact Us')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div id="fh5co-contact" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Contact Us</h3>
                <p>{!!$settings->contact!!}</p>
            </div>
        </div>
        <form action="{{route('sendmessage')}}" method="post">
            @csrf
            <div class="row animate-box">
                <div class="col-md-6">
                    <ul class="contact-info">
                        <li><i class="icon-location-pin"></i>{{$settings->address}}</li>
                        <li><i class="icon-phone2"></i>{{$settings->phone}}</li>
                        <li><i class="icon-mail"></i><a href="mailto:{{$settings->email}}">{{$settings->email}}</a></li>
                        <li><i class="icon-globe2"></i><a href="{{route('home')}}">{{$settings->website}}</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="section-title">Write To Us</h3>
                    @include('home.message')
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="" cols="30" rows="7"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary" name="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
