@extends('landing.app')
@section('content')
    <header class="bg-middleware text-black-50">
        <div class="container text-center header-container">
            <h1 class="main-textcolor">HEWAN<span id="kita">KITA.COM</span></h1>
            <p class="lead main-textcolor">Banyak Hewan lucu-lucu yang membutuhkanmu !</p>
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
        <div class="second-textcolor text-center">
            <h2>Cari Mereka Segera!</h2>
        </div>
        <div class="row text-center">
        <div class="container">
            @if(count($iklan)>0)
                @foreach($iklan as $i)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{$i->thumbnail}}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{$i->nama}}</h4>
                                <p class="card-text">{{$i->deskripsi}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ Route('landing.advertise.detail', $i->slug ) }}" class="btn btn-hewankita">SAYA MAU !</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection