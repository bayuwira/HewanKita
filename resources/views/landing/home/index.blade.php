@extends('landing.app')
@section('content')
<header class="bg-middleware text-black-50">
    <div class="container text-center header-container">
        <h1 class="main-textcolor">SELAMAT DATANG HEWAN<span id="kita">KITA.COM</span></h1>
        <p class="lead main-textcolor">Sebuah Website yang menghubungkan anda dengan seluruh fauna di dunia !</p>
        <div class="row animal-header">
            <a href=""><i class="fas fa-dog"></i></a>
            <a href=""><i class="fas fa-cat"></i></a>
            <a href=""><i class="fas fa-crow"></i></a>
            <a href=""><i class="fas fa-fish"></i></a>
            <a href=""><i class="fas fa-spider"></i></a>
            <a href=""><i class="fas fa-otter"></i></a>
        </div>
    </div>
</header>
<section id="pets-need">
    <div class="container">
        <div class="second-textcolor text-center">
            <h2 class="mb-5">MEREKA BUTUH KAMU</h2>
        </div>
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/iklan_cat1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Kucing</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                    <a href="{{ Route('landing.advertise.detail') }}" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/iklan_dog1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Anjing</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                            magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Route('landing.advertise.detail') }}" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/iklan_fish1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Ikan</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Route('landing.advertise.detail') }}" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/iklan_otter1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Otter</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                            magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Route('landing.advertise.detail') }}" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ Route('landing.advertise') }}" class="btn btn-mid mt-5">SAYA MAU YANG LAIN</a>
        </div>
    </div>
</section>
<section id="produk" class="bg-middleware">
    <div class="container">
        <div class="second-textcolor text-center">
            <h2 class="mb-5">PERLENGKAPAN HEWAN</h2>
        </div>
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Makanan Mencit</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Route('landing.product.detail') }}" class="btn btn-hewankita">COBA LIHAT</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Makanan Anjing</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                            magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Route('landing.product.detail') }}" class="btn btn-hewankita">COBA LIHAT</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Makanan Kelinci</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Route('landing.product.detail') }}" class="btn btn-hewankita">COBA LIHAT</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Makanan Kodok</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                            magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Route('landing.product.detail') }}" class="btn btn-hewankita">COBA LIHAT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ Route('landing.product') }}" class="btn btn-mid mt-5">SAYA BUTUH YANG LAIN</a>
    </div>
</section>
<section id="forum" class="bg-middleware">
    <div class="container">
        <div class="second-textcolor text-center">
            <h2 class="mb-5">Forum Terbaru</h2>
        </div>
        @if(!empty($forum))
            @foreach ($forum as $item)
                <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <h5 class="card-title">Judul Forum</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <span class="card-text-jawaban"><i class="fa fa-comment"></i>Total jawaban</span>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="text-center">
                <a href="{{ Route('landing.forum') }}" class="btn btn-mid">Tampilkan Lebih Banyak</a>
            </div>
        @else
            <p class="text-center">Tidak ada forum</p>
        @endif
    </div>
</section>
<section id="team">
    <div class="container">
        <div class="col-md-12 text-center">
            <h2>Tim Developer</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/bayu.jpg">
                    </div>
                    <div class="team-content">
                        <h3>Bayu Wira</h3>
                        <span class="post"> Front End Developer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fab fa-facebook"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-google-plus"></a></li>
                        <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/rama.jpg">
                    </div>
                    <div class="team-content">
                        <h3>Rama Suryananda</h3>
                        <span class="post"> Front End Developer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fab fa-facebook"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-google-plus"></a></li>
                        <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/giri.jpg">
                    </div>
                    <div class="team-content">
                        <h3>Giri Kusuma</h3>
                        <span class="post"> Front End Developer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fab fa-facebook"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-google-plus"></a></li>
                        <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="justify-content: center">
            <div class="col-md-4 col-sm-4">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/agus.jpg">

                    </div>
                    <div class="team-content">
                        <h3>Agus Wahyu</h3>
                        <span class="post"> Full Stack Developer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fab fa-facebook"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-google-plus"></a></li>
                        <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="our-team">
                    <div class="pic">
                        <img src="img/dharma.jpg">

                    </div>
                    <div class="team-content">
                        <h3>Dharma Putra</h3>
                        <span class="post"> Back End Developer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fab fa-facebook"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-google-plus"></a></li>
                        <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
