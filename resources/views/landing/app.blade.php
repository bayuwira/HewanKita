<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ empty($title) ? '' : $title.' - ' }}HEWANKITA.COM</title>
    <link rel="stylesheet" href="{{ asset('bower/vendor/fontawesome/css/all.min.css') }}">
    <link href="{{ asset('bower/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('bower/css/style.css')  }}">
</head>
<body>
    @include('landing.partial.header')
    @yield('content')
    @include('landing.partial.footer')

    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <link href="{{ asset('bower/vendor/bootstrap/js/bootstrap.min.js') }}" rel="stylesheet">
    @yield('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){
            {!! Session::get('toastr') !!}
        })
    </script>
</body>
</html>
