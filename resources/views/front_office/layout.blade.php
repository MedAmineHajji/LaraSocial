<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">


    <link rel="stylesheet" href="{{ asset('css/front_office_css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front_office_css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front_office_css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front_office_css/responsive.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css">
</head>

<body>
    <div class="theme-layout">

        @include('front_office.components.header')

        @yield('content')

        @include('front_office.components.footer')
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('js/front_office_scripts/main.min.js') }}"></script>
    <script src="{{ asset('js/front_office_scripts/script.js') }}"></script>
    <script src="{{ asset('js/front_office_scripts/map-init.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>

</html>
