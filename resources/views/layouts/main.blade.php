<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta type="description" content="@yield('description')">
    <meta type="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">

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

    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/myCss.css">
    <!-- End My Css -->
    <!-- Modernizr JS -->
    <script src="{{asset('assets')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <!--extra-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .checked {
        color: orange;
    }

    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: left;
    }

    .rating>input {
        display: none
    }

    .rating>label {
        position: relative;
        width: 1em;
        font-size: 30px;
        font-weight: 300;
        color: #F78536;
        cursor: pointer
    }

    .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important
    }

    .rating>input:checked~label:before {
        opacity: 1
    }

    .rating:hover>input:checked~label:before {
        opacity: 0.4
    }

    </style>

    <script>
    // const whiteHeart = '\u2661';
    // const blackHeart = '\u2665';
    // const button = document.querySelector('button');
    // button.addEventListener('click', toggle);

    // function toggle() {
    //     const like = button.textContent;
    //     if (like == whiteHeart) {
    //         button.textContent = blackHeart;
    //     } else {
    //         button.textContent = whiteHeart;
    //     }
    // }
    const whiteHeart = '\u2661';
    const blackHeart = '\u2665';
    const button = document.querySelector('button');
    button.addEventListener('click', toggle);

    function toggle() {
        const like = button.textContent;
        if (like == whiteHeart) {
            button.textContent = blackHeart;
        } else {
            button.textContent = whiteHeart;
        }
    }
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
