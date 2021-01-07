<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-title', 'Laravel-Comics')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </body>
</html>
