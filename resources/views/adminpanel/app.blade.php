<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ empty($title) ? '' : $title.' | ' }}HewanKita.com</title>
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	@yield('css')
	<link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('adminlte/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
	@include('adminpanel.partial.navbar')
	@include('adminpanel.partial.sidebar')

	<div class="content-wrapper">
		<div class="content-header">
			@yield('content-header')
		</div>

		<section class="content">
			@yield('content')
		</section>
	</div>

	<footer class="main-footer">
		<strong>Copyright &copy; {{ date('Y') }} Oleh Kelompok 1 dibuat dengan ❤️</strong>
		di sekretariat HIMAKOM UDAYANA
		<div class="float-right d-none d-sm-inline-block">
			<b>Version</b> 1.0.0
		</div>
	</footer>
</div>

<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>
@yield('js')
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<script>
	$(document).ready(function(){
		{!! Session::get('toastr') !!}
	});
</script>
</body>
</html>