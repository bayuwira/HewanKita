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
        <h2 class="mb-3 text-center">Mereka sedang mebutuhkan bantuanmu!</h2>
        <div class="row">
            @if(count($hewan) > 0)
                @foreach($hewan as $h)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <img class="img-fluid" src="{{ url('storage/', $h->thumbnail) }}">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{ $h->nama }}</h4>
                                <p class="card-text">{{ $h->deskripsi }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ Route('landing.iklan.show', $h->slug ) }}" class="btn btn-hewankita">SAYA MAU !</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col"><p class="text-center">Tidak ada data</p></div>
            @endif
        </div>
        @if(count($hewan) > 0)
            <div class="text-center">
                <a href="{{ Route('landing.iklan') }}" class="btn btn-hewankita mt-5">SAYA MAU YANG LAIN</a>
            </div>
        @endif
    </div>
</section>
<section id="produk" class="bg-middleware">
    <div class="container">
        <h2 class="mb-3 text-center">Segala kebutuhan perlengkapan peliharaanmu</h2>
        <div class="row">
            @if(count($produk) > 0)
                @foreach($produk as $p)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-img-top">
                                <img class="img-fluid" src="{{ $p->photo_thumbnail }}">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{ $p->nama }}</h4>
                                <p class="card-text">{!! $p->deskripsi !!}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ Route('landing.product.detail', [$p->slug]) }}" class="btn btn-hewankita">COBA LIHAT</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col"><p class="text-center">Tidak ada data</p></div>
            @endif
        </div>
    </div>
    @if(count($produk) > 0)
        <div class="text-center">
            <a href="{{ Route('landing.product') }}" class="btn btn-hewankita mt-5">SAYA BUTUH YANG LAIN</a>
        </div>
    @endif
</section>
@if(count($forum) > 0)
    <section id="forum" class="bg-middleware">
        <div class="container">
            <div class="second-textcolor text-center">
                <h2 class="mb-3">Forum Terbaru</h2>
            </div>
            @foreach ($forum as $item)
                <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                    <a href="{{ route('landing.forum.show', [$item->slug]) }}">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-white badge badge-{{ $item->status === 'terbuka' ? 'success' : ($item->status === 'tertutup' ? 'danger' : 'info')  }} mb-2 float-right" id="status-forum">{{ ucfirst($item->status) }}</span>
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $item->user->name }}</h6>
                                <p class="card-text">{{ strlen($item->konten) > 80 ? substr($item->konten, 0, 80).'...' : $item->konten }}</p>
                                <span class="card-text-jawaban"><i class="fa fa-comment"></i> {{ count($item->comments) }}</span>
                                <div class="white-space : pre"></div>
                                <h6 class="card-subtitle my-2 text-muted">{{ date('d M Y H:i', strtotime($item->created_at)) }}</h6>
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
