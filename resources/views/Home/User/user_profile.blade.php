<?php
use Illuminate\Support\Facades\Route;

    $settings = \App\Http\Controllers\MainController::getSetting();

	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>

@extends('layouts.main')

@section('title', $settings->title)

@section('content')
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            @include('Home.User._user_menu')
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                @include('profile.show')
            </div>
        </div>
    </div>
</div>
@endsection
