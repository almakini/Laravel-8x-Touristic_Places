<?php
use Illuminate\Support\Facades\Route;

    $settings = \App\Http\Controllers\MainController::getSetting();

	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>
<div class="sticky-wrapper" style="height:96px;">
    <!--Start of header-->
    <header id="fh5co-header-section" class="sticky-banner stuck">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                <h1 id="fh5co-logo"><a href="{{route('home')}}"><i class="icon-airplane"></i>Baladi</a></h1>
                @include('Home._menu')
            </div>
        </div>
    </header>
    <!-- end:header-top -->
</div>
@livewireScripts
