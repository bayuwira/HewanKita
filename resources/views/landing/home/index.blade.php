<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
		<title>HewanKita.com</title>
	</head>
	<body>
		<section id="navbar">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#">HewanKita.com</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-direction: row-reverse">
					<ul class="navbar-nav mr-left">
						<li>
							<a class="nav-link" href="{{ route('login') }}">Login</a>
						</li>
						<li>
							<a class="btn btn-primary ml-3 btn-register" href="{{ route('register') }}" role="button">Daftar</a>
						</li>
					</ul>
				</div>
			</nav>
		</section>
		<section id="hero">
			<div class="container-fluid">
				<div class="row hero-container">
					<div class="col-md-6">
						<ul class="list-inline list-category">
							<li class="list-inline-item dropdown">
								<a class="nav-link dropdown-toggle" style="padding-left: 0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Semua Kategori
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Mamalia</a>
									<a class="dropdown-item" href="#">Unggas</a>
									<a class="dropdown-item" href="#">Reptile</a>
									<a class="dropdown-item" href="#">Diet Hewan</a>
								</div>
							</li>
							<li class="list-inline-item">
									<a class="nav-link" href="#">Mamalia</a>
							</li>
							<li class="list-inline-item">
									<a class="nav-link" href="#">Unggas</a>
							</li>
							<li class="list-inline-item">
									<a class="nav-link" href="#">Reptile</a>
							</li>
							<li class="list-inline-item">
									<a class="nav-link" href="#">Diet Hewan</a>
							</li>
						</ul>
						
						<div class="pencarian">
							<h2>Semua solusi permasalahan Hewan</h2>
							<h2>Anda ada pada kami!</h2>
							<input class="form-control" type="search" placeholder="Temukan hewan peliharaan, makanan dan lainnya..." aria-label="Search">
							<button class="btn btn-primary mt-2" type="submit">Cari</button>
						</div>
					</div>

					<div class="col-md-6 hero-img d-none d-lg-block"></div>
				</div>
			</div>
		</section>

		<section id="hewan">
			<div class="container">
				<h2 class="text-title">Hewan <br>yang butuh kamu</h2>
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<a href="#">
							<div class="card">
								<div class="card-img-top">
									<img src="{{ asset('img/hero.jpg') }}">
								</div>	
								<div class="card-body"  align="left">
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
									<img src="{{ asset('img/hero.jpg') }}">
								</div>	
								<div class="card-body"  align="left">
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
									<img src="{{ asset('img/hero.jpg') }}">
								</div>	
								<div class="card-body"  align="left">
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
									<img src="{{ asset('img/hero.jpg') }}">
								</div>	
								<div class="card-body"  align="left">
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
									<img src="{{ asset('img/hero.jpg') }}">
								</div>	
								<div class="card-body"  align="left">
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
									<img src="{{ asset('img/hero.jpg') }}">
								</div>	
								<div class="card-body"  align="left">
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
									<img src="{{ asset('img/hero.jpg') }}">
								</div>	
								<div class="card-body"  align="left">
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
									<img src="{{ asset('img/hero.jpg') }}">
								</div>	
								<div class="card-body"  align="left">
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
					<a href="#" class="btn btn-primary">Lihat lebih banyak</a>
				</div>
			</div>
		</section>


		<section id="footer">
			<div class="container">
				<h5 class="text-center text-white">HewanKita.com dibuat oleh kelompok 2 dengan ❤️</h5>
			</div>
		</section>

		<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>