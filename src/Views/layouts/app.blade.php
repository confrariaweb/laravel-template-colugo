<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-colugo/css/responsive.css') }}">
        <title>@yield('title')</title>
        <link rel="icon" type="image/png" href="{{ asset('vendor/confrariaweb/template-colugo/img/favicon.png') }}">
    </head>
    <body data-spy="scroll" data-offset="120">
        <div class="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        @include('templateColugo::partials.navbar')
        @yield('content')
        @include('templateColugo::partials.footer')
        <div class="go-top">
            <i class="fa fa-chevron-up"></i>
            <i class="fa fa-chevron-up"></i>
        </div>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/odometer.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/slick.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/particles.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/jquery.ripples-min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/wow.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/contact-form-script.js') }}"></script>
        <script src="{{ asset('vendor/confrariaweb/template-colugo/js/main.js') }}"></script>
    </body>
</html>