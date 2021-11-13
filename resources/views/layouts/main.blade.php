<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  @yield('CSS')
  @yield('JS')
</head>
<body>


<div class="jumbotron text-center">
  <h1>Header</h1>
  @yield('header')
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
  @yield('footer')
</div>
</body>
</html>