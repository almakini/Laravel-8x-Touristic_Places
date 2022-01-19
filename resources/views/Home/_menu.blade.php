<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>

<!-- START #fh5co-menu-wrap -->
<nav id="fh5co-menu-wrap" role="navigation" style="padding-right:13%; padding-left:13%;">
    <h1 id="" style="font-weight:700;float:left;padding:20px;font-size: 28px;text-transform:uppercase; margin" class="">
        <a href="{{route('home')}}">Baladi</a></h1>
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
    </ul>
</nav>
