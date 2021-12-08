<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tchad Baladi | @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta type="description" content="@yield('description')">
  <meta type="keywords" content="@yield('keywords')">
  <meta name="author" content="Almakini">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/tooplate-main.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
</head>
<body>


<div class="jumbotron text-center">
  <h1>Header</h1>
  @include('Home._header')
</div>
  
<div class="container">
  <div class="row">

    @yield('sidebar')

    @section('content')
    <div class="col-sm-8">
        <div style="background-color:#4eaa89;">
            <h3>Slider<h3>
        </div>
        <br>
        <hr>
      <h3>Content</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    @show
  </div>
</div>
<div class="jumbotron text-center">
  <h1>Footer</h1>
  @include('Home._footer')
  @yield('footer')
</div>
</body>
</html>