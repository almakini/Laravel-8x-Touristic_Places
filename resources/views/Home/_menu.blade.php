<?php
use Illuminate\Support\Facades\Route;

    $settings = \App\Http\Controllers\MainController::getSetting();

	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>

<!-- START #fh5co-menu-wrap -->
<nav id="fh5co-menu-wrap" role="navigation">
    <ul class="flexCenter sf-menu sf-js-enabled sf-arrows" id="fh5co-primary-menu" style="touch-action: pan-y;">
        <li class="flexCenter {{Route::currentRouteName() === 'home' ? 'active' : ''}}" tabindex="0">
            <a href="{{route('home')}}">Home</a>
        </li>
        <li class="flexCenter {{Route::currentRouteName() === 'categories' ? 'active' : '' }}" tabindex="0">
            <a href="#">Categories</a>
            @include('Home.Category._category')
        </li>
        <li class="menuItem flexCenter {{Route::currentRouteName() === 'references' ? 'active' : '' }}" tabindex="0">
            <a href="{{route('references')}}">References</a>
        </li>
        <li class="menuItem flexCenter {{Route::currentRouteName() === 'faq' ? 'active' : '' }}" tabindex="0">
            <a href="{{route('faqs')}}">FAQ</a>
        </li>
        <li class="{{Route::currentRouteName() === 'about' ? 'active' : '' }} menuItem flexCenter" tabindex="0">
            <a href="{{route('about')}}">About Us</a>
        </li>
        <li class="{{Route::currentRouteName() === 'contact-us' ? 'active' : '' }} menuItem flexCenter" tabindex="0">
            <a href="{{route('contact-us')}}">Contact</a>
        </li>
        @guest
        <li class="flexCenter" tabindex="0">
            <a>Login/Signup</a>
            <ul class="fh5co-sub-menu">
                <li class="subItem flexCenter" tabindex="0">
                    <a href="{{route('login')}}">Login</a>
                </li>
                <li class="subItem flexCenter" tabindex="0">
                    <a href="{{route('register')}}">Signup</a>
                </li>
            </ul>
        </li>
        @endguest
        @auth
        <li style="margin-right:10px;"
            class="flexCenter {{Route::currentRouteName() === 'categories' ? 'active' : '' }}" tabindex="0">
            <a>{{Auth::user()->name}}</a>
            <ul class="fh5co-sub-menu">
                <li class="subItem flexCenter" tabindex="0">
                    <a href="{{route('user_profile')}}">My Account</a>
                </li>
                <li class="subItem flexCenter" tabindex="0">
                    <a href="{{route('user_logout')}}">Logout</a>
                </li>
            </ul>
            @endauth
        </li>
    </ul>
</nav>
