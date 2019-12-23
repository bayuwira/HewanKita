@extends('landing.app')
@section('content')
<section class="first-content bg-pink">
    <div class="container text-center header-container">
        <h1 class="main-textcolor">SELAMAT DATANG HEWAN<span class="kita">KITA.COM</span></h1>
        <p class="lead main-textcolor">Sebuah Website yang menghubungkan anda dengan seluruh fauna di dunia !</p>
        <div class="row animal-header">
            <i class="fas fa-dog"></i>  
            <i class="fas fa-cat"></i>  
            <i class="fas fa-crow"></i> 
            <i class="fas fa-fish"></i> 
            <i class="fas fa-spider"></i>   
            <i class="fas fa-otter"></i>    
        </div>
    </div>
</section>
<section id="pets-need">
    <div class="container">
        <h2 class="mb-3">Mereka sedang mebutuhkan bantuanmu!</h2>
        <div class="row text-center">
        @foreach($hewan as $h)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{$h->thumbnail}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$h->nama}}</h4>
                        <p class="card-text">{{$h->deskripsi}}</p>
                    </div>
                    <div class="card-footer">
                    <a href="{{ Route('landing.advertise.detail', $h->slug ) }}" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="text-center">
            <a href="{{ Route('landing.iklan') }}" class="btn btn-hewankita mt-5">SAYA MAU YANG LAIN</a>
        </div>
    </div>
</section>
<section id="produk" class="bg-middleware">
    <div class="container">
        <h2 class="mb-4">Segala kebutuhan perlengkapan peliharaanmu</h2>
        <div class="row text-center">
        @foreach($produk as $p)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
<<<<<<< HEAD
                    <img class="card-img-top" src="{{$p->photo_thumbnail}}" alt="">
=======
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Makanan Mencit</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Route('landing.product') }}" class="btn btn-hewankita">COBA LIHAT</a>
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
                        <a href="{{ Route('landing.product') }}" class="btn btn-hewankita">COBA LIHAT</a>
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
                        <a href="{{ Route('landing.product') }}" class="btn btn-hewankita">COBA LIHAT</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
>>>>>>> b2c4c2614c7bbc3317efac31790b8730efe8c8a9
                    <div class="card-body">
                        <h4 class="card-title">{{$p->nama}}</h4>
                        <p class="card-text">{{$p->deskripsi}}</p>
                    </div>
                    <div class="card-footer">
<<<<<<< HEAD
                        <a href="{{ Route('landing.product.detail', $p->slug) }}" class="btn btn-hewankita">COBA LIHAT</a>
=======
                        <a href="{{ Route('landing.product.detail', ['product']) }}" class="btn btn-hewankita">COBA LIHAT</a>
>>>>>>> b2c4c2614c7bbc3317efac31790b8730efe8c8a9
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="text-center">
        <a href="{{ Route('landing.product') }}" class="btn btn-hewankita mt-5">SAYA BUTUH YANG LAIN</a>
    </div>
</section>
@if(!empty($forum))
    <section id="forum" class="bg-middleware">
        <div class="container">
            <div class="second-textcolor text-center">
                <h2 class="mb-5">Forum Terbaru</h2>
            </div>
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
        </div>
    </section>
@endif
<section class="bg-pink">
    <div class="container">
        <div class="row" style="align-items: center">
            <div class="col-md-9">
                <h3>AYO <span class="kita">DAFTAR</span>, <br>DAN IKLANKAN <span class="kita">PELIHARAANMU</span>!</h3>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-hewankita">Daftar Sekarang Juga!</a>
            </div>
        </div>
    </div>
</section>
{{-- <section id="team" class="bg-pink">
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
</section> --}}
@endsection
