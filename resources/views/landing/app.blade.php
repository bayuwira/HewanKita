<!DOCTYPE html>
<html lang="en">
<head>
    <title>HewanKita</title>
    <link rel="icon" href =https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type = "image/x-icon"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    @yield('js')
</body>
</html>
