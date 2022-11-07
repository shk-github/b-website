<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title', config('app.name').' - website test')</title>
        <meta charset="UTF-8">

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta http-equiv="content-language" content="cs">
        <meta http-equiv="pragma" content="no-cache">
        <meta name="author" content="Tomáš Pindur - {{config('app.name')}}">
        <meta name="copyright" content="www.domain.cz">

        <meta property="og:url" content="{{config('app.url')}}">
        <meta property="og:locale" content="cs_CZ">
        <meta property="og:site_name" content="{{config('app.name')}}">
        <meta property="og:type" content="website">

        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="Lorem ipsum dolor sit amet consectetur, adipisicing elit.">   
        <meta property="og:title" content="Lorem ipsum - dolor sit amet consectetur, adipisicing elit.">
        <meta property="og:description" content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi harum necessitatibus, vero quae tempora at quia facilis.">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="{{config('app.name')}}, Lorem ipsum, Commodi harum necessitatibus, vero quae tempora at quia facilis">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#a7c721">
        <meta name="apple-mobile-web-app-title" content="domain.cz">
        <meta name="application-name" content="domain.cz">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" rel="preconnect"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css?v=0.001') }}">

    </head>
    <body class="body" id="body">

        @include('header')

        <main id="main" class="main">
            <div class="container">
                @yield('content')
            </div>
        </main>

        @include('footer')

        <!-- JS -->
        <script src="{{ URL::asset('assets/js/main.js') }}"></script>

    </body>
</html>