<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <title>Life controller</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        @include('layout.partials.nav')
        @yield('content')
        @yield('script')
    </body>
</html>
