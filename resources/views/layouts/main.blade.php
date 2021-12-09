<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tchad Baladi | @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta type="description" content="@yield('description')">
  <meta type="keywords" content="@yield('keywords')">
  <meta name="author" content="Almakini">

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
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

  
</head>
<body>
<div id="fh5co-wrapper">
  <div id="fh5co-page">
    @include('Home._header')


    @include('Home._footer')
  </div>
	<!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->
</body>
</html>