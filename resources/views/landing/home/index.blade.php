@extends('landing.app')

@section('content')
	<nav class="navbar navbar-expand-lg navbar-light bg-white" style="backgoround-color: white !important;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">HEWANKITA.COM</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<form class="form-inline my-2 my-lg-0 form-panjang">
						<div class="input-group mb-3 nav-cari">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">cari</span>
							</div>
							<input type="text" class="form-control cari-input" placeholder="Cari hewan atau perlengkapannya" aria-label="Cari" aria-describedby="basic-addon1">
						</div>
					</form>
				</li>
			</ul>
			<ul class="nav justify-content-end">
				{{-- <li class="nav-item active">
					<a class="nav-link" style="color: #45454d;" href="#">Admin <span class="sr-only">(current)</span></a>
				</li> --}}

				<li class="nav-item active">
					<a class="nav-link" style="color: #45454d;" href="#">Pengguna baru? Daftar <span class="sr-only">(current)</span></a>
				</li>
				{{-- <li class="nav-item">
					<a class="nav-link" style="color: #45454d;" href="app/actions/logout.php">Logout</a>
				</li> --}}
				<li class="nav-item">
					<a class="nav-link" style="color: #45454d;" href="login.php">Masuk</a>
				</li>
				<li class="nav-item">
					<a href="#" class="btn btn-secondary btn-md disabled" style="background-color: #ffd5d5; color: #45454d; border: 0px;" tabindex="-1" role="button" aria-disabled="true">Iklan</a>
				</li>
			</ul>
		</div>
	</nav>
	<ul class="nav justify-content-center kategori-hewan" style="background-color: white; border-top: 2px solid; border-color: #f2f2f2;">
		<li class="nav-item">
			<a class="nav-link active" href="#">Reptile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Unggas</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Mamalia</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="#">Ikan</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Perlengkapan</a>
		</li>
	</ul>
	<div class="container">
		<div class="jumbotron jumbotron-fluid rekomendasi-populer">
			<div class="rekomendasi-populer-content">
				<h3 style="color: #fc7fb2">Teropuler</h3>
			</div>
			<div class="rekomendasi-populer-gambar">
				<ul class="nav justify-content-center">
					<li class="nav-item-gambar">
						<img src="{{ asset('img/1.png') }}" alt="">
						<h5 align="center" style="color: #fc7fb2">Kelinci</h5>
					</li>
					<li class="nav-item-gambar">
						<img src="{{ asset('img/1.png') }}" alt="">
						<h5 align="center" style="color: #fc7fb2">Kelinci</h5>
					</li>
					<li class="nav-item-gambar">
						<img src="{{ asset('img/1.png') }}" alt="">
						<h5 align="center" style="color: #fc7fb2">Kelinci</h5>
					</li>
					<li class="nav-item-gambar">
						<img src="{{ asset('img/1.png') }}" alt="">
						<h5 align="center" style="color: #fc7fb2">Kelinci</h5>
					</li>
					<li class="nav-item-gambar">
						<img src="{{ asset('img/1.png') }}" alt="">
						<h5 align="center" style="color: #fc7fb2">Kelinci</h5>
					</li>
				</ul>
			</div>
		</div>
		<div class="container rekomendasi-content">
			<h2 class="text-title" style="color: #45454d">Rekomendasi</h2>
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<a href="#">
						<div class="card">
							<div class="card-img-top">
								<div class="card" style="border: 2px solid; border-color: #f2f2f2; margin: 7%;">
									<h5 style="color: #45454d; margin-left: 6px;">Rp. 10.000</h5>
									<img src="{{ asset('img/1.png') }}">
								</div>
							</div>
							<div class="card-body" align="left">
								<div class="blog-card-title">
									<h4 class="form-text">Kucing Persia</h4>
								</div>
								<div class="blog-card-foot">
									<small class="form-text text-muted">by hewankita.com</small>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4">
					<a href="#">
						<div class="card">
							<div class="card-img-top">
								<div class="card" style="border: 2px solid; border-color: #f2f2f2; margin: 7%;">
									<h5 style="color: #45454d; margin-left: 6px;">Rp. 10.000</h5>
									<img src="{{ asset('img/1.png') }}">
								</div>
							</div>
							<div class="card-body" align="left">
								<div class="blog-card-title">
									<h4 class="form-text">Kucing Persia</h4>
								</div>
								<div class="blog-card-foot">
									<small class="form-text text-muted">by hewankita.com</small>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4">
					<a href="#">
						<div class="card">
							<div class="card-img-top">
								<div class="card" style="border: 2px solid; border-color: #f2f2f2; margin: 7%;">
									<h5 style="color: #45454d; margin-left: 6px;">Rp. 10.000</h5>
									<img src="{{ asset('img/1.png') }}">
								</div>
							</div>
							<div class="card-body" align="left">
								<div class="blog-card-title">
									<h4 class="form-text">Kucing Persia</h4>
								</div>
								<div class="blog-card-foot">
									<small class="form-text text-muted">by hewankita.com</small>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4">
					<a href="#">
						<div class="card">
							<div class="card-img-top">
								<div class="card" style="border: 2px solid; border-color: #f2f2f2; margin: 7%;">
									<h5 style="color: #45454d; margin-left: 6px;">Rp. 10.000</h5>
									<img src="{{ asset('img/1.png') }}">
								</div>
							</div>
							<div class="card-body" align="left">
								<div class="blog-card-title">
									<h4 class="form-text">Kucing Persia</h4>
								</div>
								<div class="blog-card-foot">
									<small class="form-text text-muted">by hewankita.com</small>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4">
					<a href="#">
						<div class="card">
							<div class="card-img-top">
								<div class="card" style="border: 2px solid; border-color: #f2f2f2; margin: 7%;">
									<h5 style="color: #45454d; margin-left: 6px;">Rp. 10.000</h5>
									<img src="{{ asset('img/1.png') }}">
								</div>
							</div>
							<div class="card-body" align="left">
								<div class="blog-card-title">
									<h4 class="form-text">Kucing Persia</h4>
								</div>
								<div class="blog-card-foot">
									<small class="form-text text-muted">by hewankita.com</small>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4">
					<a href="#">
						<div class="card">
							<div class="card-img-top">
								<div class="card" style="border: 2px solid; border-color: #f2f2f2; margin: 7%;">
									<h5 style="color: #45454d; margin-left: 6px;">Rp. 10.000</h5>
									<img src="{{ asset('img/1.png') }}">
								</div>
							</div>
							<div class="card-body" align="left">
								<div class="blog-card-title">
									<h4 class="form-text">Kucing Persia</h4>
								</div>
								<div class="blog-card-foot">
									<small class="form-text text-muted">by hewankita.com</small>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4">
					<a href="#">
						<div class="card">
							<div class="card-img-top">
								<div class="card" style="border: 2px solid; border-color: #f2f2f2; margin: 7%;">
									<h5 style="color: #45454d; margin-left: 6px;">Rp. 10.000</h5>
									<img src="{{ asset('img/1.png') }}">
								</div>
							</div>
							<div class="card-body" align="left">
								<div class="blog-card-title">
									<h4 class="form-text">Kucing Persia</h4>
								</div>
								<div class="blog-card-foot">
									<small class="form-text text-muted">by hewankita.com</small>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4">
					<a href="#">
						<div class="card">
							<div class="card-img-top">
								<div class="card" style="border: 2px solid; border-color: #f2f2f2; margin: 7%;">
									<h5 style="color: #45454d; margin-left: 6px;">Rp. 10.000</h5>
									<img src="{{ asset('img/1.png') }}">
								</div>
							</div>
							<div class="card-body" align="left">
								<div class="blog-card-title">
									<h4 class="form-text">Kucing Persia</h4>
								</div>
								<div class="blog-card-foot">
									<small class="form-text text-muted">by hewankita.com</small>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="text-center">
				<a href="#" class="btn btn-primary" style="background-color: #45454d; border: 0px;">Lihat lebih banyak</a>
			</div>
			<br>
		</div>
	</div>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h4 align="center">Dibuat dengan cinta</h4>
		</div>
	</div>
@endsection