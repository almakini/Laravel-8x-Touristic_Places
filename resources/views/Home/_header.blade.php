<?php
use Illuminate\Support\Facades\Route;
?>
<!--Start of header-->
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="home"><i class="icon-airplane"></i>Tchad Baladi</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
							<li class=" {{Route::currentRouteName() === 'categories' ? 'active' : '' }}">
								<a href="#" class="fh5co-sub-ddown">Categories</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Beaches</a></li>
									<li><a href="#">Palaces</a></li>
									<li><a href="#">Mountains</a></li>
									<li><a href="#">Forests</a></li>
									<li><a href="#">Zoo Parks</a></li>
									<li><a href="#">Museums</a></li>
									<li><a href="#">Falls</a></li>
									<li><a href="#">Skyscrapers</a></li>
									<li><a href="#">Parks</a></li>
									<li><a href="#">Squares</a></li>
									<li><a href="#">Skiing</a></li>
								</ul>
							</li>
							<li class="{{Route::currentRouteName() === 'places' ? 'active' : '' }}"><a href="{{route('places')}}">Places</a></li>							
              				<li class="{{Route::currentRouteName() === 'about' ? 'active' : '' }}"><a href="{{route('about')}}">About Us</a></li>
							<li class="{{Route::currentRouteName() === 'contact-us' ? 'active' : '' }}"><a href="{{route('contact-us')}}">Contact</a></li>
							<li><a href="{{route('login')}}">Sign In</a></li>
							<li><a href="{{route('register')}}">Sign Up</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- end:header-top -->
	