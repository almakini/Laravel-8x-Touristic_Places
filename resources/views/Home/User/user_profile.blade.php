<?php
    $settings = \App\Http\Controllers\MainController::getSetting();?>

@extends('layouts.main')

@section('title', $settings->title)

@section('content')
<div class="container">
    <div class="row myProfile">
        <div class="col-md-3">
            @include('Home.User._user_menu')
        </div>
        <div class="col-md-9">
            <div class="myProfile-content">
                @include('profile.show')
            </div>
        </div>
    </div>
</div>
@endsection
