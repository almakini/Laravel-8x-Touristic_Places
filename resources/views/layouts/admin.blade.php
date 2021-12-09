<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Admin Panel"/>
    <meta name="author" content="Almakini">
    <title>Tchad Baladi | @yield('title')</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('admin_assets')}}/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('admin_assets')}}/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('admin_assets')}}/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('admin_assets')}}/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('admin_assets')}}/js/Lightweight-Chart/cssCharts.css"> 
</head>
<body>
<div id="wrapper">
    @include('Admin._header')

    @include('Admin._slider')

    @include('Admin._footer')
</div>
</body>
</html>>