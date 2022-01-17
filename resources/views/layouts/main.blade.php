<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta type="description" content="@yield('description')">
    <meta type="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">

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

    <!-- My Css and Js -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/myCss.css">
    <link rel="stylesheet" href="{{asset('assets')}}/js/myJs.js">
    <!-- End -->

    <!-- Modernizr JS -->
    <script src="{{asset('assets')}}/js/modernizr-2.6.2.min.js"></script>

    <!-- Extra -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
