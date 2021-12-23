<!DOCTYPE html>
<html lang="en">

<head>
    <title>Baladi | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta type="description" content="@yield('description')">
    <meta type="keywords" content="@yield('keywords')">
    <meta name="author" content="Almakini">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/superfish.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/cs-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/cs-skin-border.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

    <!-- Modernizr JS -->
    <script src="{{asset('assets')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <!--extra-->
    <style>
    .mobile-break {
        display: block;
    }

    .flexCenter {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .title {
        padding: 1em;
        font-weight: bolder;
        flex-grow: 1;
        justify-content: flex-start;
    }

    .nav {
        padding-top: 40px;
    }

    .hamburger {
        width: 60px;
        height: 60px;
        position: absolute;
        top: 0;
        left: calc(100% - 60px);
        color: #fff;
    }

    .menu {
        visibility: hidden;
        list-style-type: none;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        z-index: auto;
    }

    .hamburger:focus+.menu,
    .menu:hover {
        visibility: visible;
        background-color: #fff;
    }

    .menuItem {
        width: 100px;
        padding: 0.5em 1em;
        outline: none;
        position: relative;
        background-color: #333;
        transition: background-color 0.3s ease-in-out;
    }

    .subMenu {
        min-width: 120px;
        visibility: hidden;
        list-style-type: none;
        position: absolute;
        top: 80%;
        left: -80%;
        background-color: #333;
        color: #fff;
        box-shadow: 2px 2px 2px #000;
        z-index: 1;
    }

    .subLevel {
        top: 55%;
        z-index: 1;
    }

    .subItem {
        width: 100%;
        min-width: 100px;
        padding: 1em 1.5em;
        background-color: #333;
        outline: none;
        position: relative;
        transition: background-color 0.3s ease-in-out;
    }

    .hamburger:hover,
    .hamburger:focus,
    .menuItem:hover,
    .menuItem:focus,
    .subItem:hover,
    .subItem:focus,
    .subItem:focus-within {
        background-color: #fff;
        color: #000;
    }

    .subItem:hover>a,
    .subItem:focus>a,
    a:focus {
        color: #000;
        /* font-size: 120%; */
        /* Try this transform instead (thanks Ahmad!) */
        transform: scale(1.2);
    }

    .menuItem:hover>.subMenu,
    .menuItem:focus>.subMenu,
    .menuItem:focus-within>.subMenu,
    .subItem:hover>.subMenu,
    .subItem:focus>.subMenu,
    .subItem:focus-within>.subMenu {
        visibility: visible;
    }

    @media only screen and (min-width: 768px) {
        h1 {
            font-size: 1rem;
        }

        .nav {
            padding-top: 0;
            flex-grow: 1;
        }

        .title {
            flex-grow: 0;
        }

        .mobile-break {
            display: none;
        }

        .hamburger {
            display: none;
        }

        .menu {
            visibility: visible;
            flex-direction: row;
            justify-content: flex-end;
        }

        .menu:hover,
        .menu:focus {
            background-color: #333;
        }
    }

    .skip-link {
        position: absolute;
        top: -999px;
        left: 0;
        background: #fff;
        padding: 0.5rem;
        z-index: 1;
        color: #000;
    }

    .skip-link:focus,
    .skip-link:active {
        top: auto;
        left: auto;
    }

    </style>

    <script>

    </script>
    @yield('css')
    @yield('js')

</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            @yield('header')
            @include('Home._header')

            @section('top')
            @show

            @section('content')
            @show

            @yield('footer')
            @include('Home._footer')
        </div>
        <!-- END fh5co-page -->
    </div>
    <!-- END fh5co-wrapper -->
</body>

</html>
