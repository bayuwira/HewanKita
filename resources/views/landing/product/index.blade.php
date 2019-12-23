@extends('landing.app')
@section('content')
<header class="bg-middleware text-black-50">
        <div class="container text-center header-container">
            <h1 class="main-textcolor">HEWAN<span id="kita">KITA.COM</span></h1>
            <p class="lead main-textcolor">Butuh perlengkapan hewan? Disini banyak</p>
            <div class="row product-header">
                <a href=""><i class="fas fa-bone"></i></a>
                <a href=""><i class="fas fa-drumstick-bite"></i></a>
                <a href=""><i class="fas fa-carrot"></i></a>
                <a href=""><i class="fas fa-cookie"></i></a>
                <a href=""><i class="fas fa-bread-slice"></i></a>
                <a href=""><i class="fas fa-cannabis"></i></a>
            </div>
        </div>
    </header>
    <section id="pets-need">
        <div class="second-textcolor text-center">
            <h2>Cari dibawah!</h2>
        </div>
        <div class="container">
            <div class="row text-center">
            @foreach($produk as $p)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{$p->photo_thumbnail}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{$p->nama}}</h4>
                            <p class="card-text">{{$p->deskripsi}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ Route('landing.product.detail', $p->slug) }}" class="btn btn-hewankita">DETAIL</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection