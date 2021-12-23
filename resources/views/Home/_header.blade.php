<?php
use Illuminate\Support\Facades\Route;

	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>
<div class="sticky-wrapper" style="height:96px;">
    <!--Start of header-->
    <header id="fh5co-header-section" class="sticky-banner stuck">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                <h1 id="fh5co-logo"><a href="home"><i class="icon-airplane"></i>Baladi</a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="flexCenter sf-menu sf-js-enabled sf-arrows" id="fh5co-primary-menu"
                        style="touch-action: pan-y;">
                        <li class="flexCenter {{Route::currentRouteName() === 'home' ? 'active' : ''}}" tabindex="0">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="flexCenter {{Route::currentRouteName() === 'categories' ? 'active' : '' }}"
                            tabindex="0">
                            <a>Categories</a>
                            @include('Home._category')
                        </li>
                        <li class="menuItem flexCenter {{Route::currentRouteName() === 'places' ? 'active' : '' }}"
                            tabindex="0">
                            <a href="{{route('places')}}">Places</a>
                        </li>
                        <li class="{{Route::currentRouteName() === 'about' ? 'active' : '' }} menuItem flexCenter"
                            tabindex="0">
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="{{Route::currentRouteName() === 'contact-us' ? 'active' : '' }} menuItem flexCenter"
                            tabindex="0">
                            <a href="{{route('contact-us')}}">Contact</a>
                        </li>
                        <li class="menuItem flexCenter" tabindex="0">
                            <a href="{{route('login')}}">Sign In</a>
                        </li>
                        <li class="menuItem flexCenter" tabindex="0">
                            <a href="{{route('register')}}">Register</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- end:header-top -->
</div>
