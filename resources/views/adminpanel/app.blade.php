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
@include('ckfinder::setup')
@yield('js')
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<script>
	function formatRupiah(angka, prefix){
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
	$(document).ready(function(){
		$('[format-uang]').keyup(function(){
			var value = $(this).val();
			$(this).val(formatRupiah(value));
		});
		{!! Session::get('toastr') !!}
	});
</script>
</body>
</html>