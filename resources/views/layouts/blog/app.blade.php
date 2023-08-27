<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.blog.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sección Estudiantil de Dirección de Proyectos de la UNT">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/icon-sedipro.ico')}}">
    <link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/css/templatemo.css') }}" as="style" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/css/fontawesome.min.css') }}" as="style" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
    <meta name="description" content="Sección Estudiantil de Dirección de Proyectos de la UNT">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/ml.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper/swiper-bundle.min.css') }}">

    @yield('styles')

    <link rel="stylesheet" href="{{ asset('assets/css/owl/carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl/theme.default.css') }}">

</head>

<body>

    @yield('contenido')


    @include('layouts.blog.footer')

    <!-- Start Script -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src=" {{ asset('assets/js/owlCarousel/carousel.min.js') }}"></script>

    <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
    @yield('scripts')

</body>

</html>
