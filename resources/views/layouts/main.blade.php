<!DOCTYPE html>
<html lang="en">

<head>
            
    <meta charset="utf-8">
            <title>@yield("title")</title>
            
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
            
    <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
            
    <meta content="Bootstrap News Template - Free HTML Templates" name="description">

            
    <!-- Favicon -->
            
    <link href="{{asset('assets')}}/template/img/favicon.ico" rel="icon">

            
    <!-- Google Fonts -->
            
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&amp;display=swap" rel="stylesheet">

            
    <!-- CSS Libraries -->
            
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
            
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
            
    <link href="{{asset('assets')}}/template/lib/slick/slick.css" rel="stylesheet">
            
    <link href="{{asset('assets')}}/template/lib/slick/slick-theme.css" rel="stylesheet">

            
    <!-- Template Stylesheet -->
            
    <link href="{{asset('assets')}}/template/css/style.css" rel="stylesheet">

</head>

<body>
    @include("home.topbare")
    @include("home._brand")
    @include("home._navbar")
    @include("home.topnews")
    @include("home._category11")
    @include("home._category22")
    @include("home._tabnews")
    @include("home._mainnews")

    @yield('content')

    @include("home._footer")
    @include("home._footermenu")
</body>

</html>
