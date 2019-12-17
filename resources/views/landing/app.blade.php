<!DOCTYPE html>
<html lang="en">
<head>
    <title>HewanKita</title>
    <link rel="icon" href =https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type = "image/x-icon"> 
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>