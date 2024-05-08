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
    <body class="w-screen h-screen overflow-x-hidden" style="margin-bottom: 0;">
        @include('layout.partials.nav')
        <main class="w-10/12 min-h-screen float-left">
            @include('layout.partials.top_bar')
            @yield('content')
        </main>
        @yield('script')
    </body>
</html>
