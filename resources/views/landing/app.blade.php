<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HewanKita</title>
    <link href="{{ asset('bower/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower/css/scrolling-nav.css') }}" rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('bower/css/style.css')  }}">
    <link rel="stylesheet" href="{{ asset('bower/vendor/fontawesome/css/all.min.css') }}">
</head>
<body>
    @include('landing.partial.header')
    @yield('content')
    @include('landing.partial.footer')
    <link href="{{ asset('bower/vendor/bootstrap/js/bootstrap.min.js') }}" rel="stylesheet">
    @yield('js')
</body>
</html>