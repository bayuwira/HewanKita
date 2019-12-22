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
<section id="forum">
        <div class="container">
            <div id="search_menu">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                    <div id="searchbar">
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input class="form-control my-0 py-1 border" type="text" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <span class="input-group-text btn lighten-3" id="basic-text1"><i
                                            class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <button class="btn  dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Kategori</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Reptil</a>
                            <a class="dropdown-item" href="#">Kucing</a>
                            <a class="dropdown-item" href="#">Anjing</a>
                            <a class="dropdown-item" href="#">Ikan</a>
                            <a class="dropdown-item" href="#">Burung</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <a href="{{ Route('landing.forum.create') }}">
                            <button class="btn btn-dark" type="button">Tambah</button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="forum">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i>Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <div class="white-space : pre"></div>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i> Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <div class="white-space : pre"></div>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i> Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <div class="white-space : pre"></div>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i> Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <div class="white-space : pre"></div>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i> Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <div class="white-space : pre"></div>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i> Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <div class="white-space : pre"></div>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i> Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <div class="white-space : pre"></div>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i> Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge mb-2 " id="tag-forum">Tag Forum</span>
                                <span class="badge mb-2 float-right" id="status-forum">Status Forum</span>
                                <div class="white-space : pre"></div>
                                <a href="{{ Route('landing.forum.detail') }}"><h5 class="card-title">Judul Forum</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                <p class="card-text">Konten Forum</p>
                                <a href="#" class="card-link" style="text-decoration: none;"><i class="fa fa-comment"></i> Total
                                    jawaban</a>
                                <a href="#" class="card-link"><i class="fa fa-thumbs-up"></i>Total Like</a>
                                <div class="white-space : pre"></div>
                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="hk-pagination">
                            <a href="#">«</a>
                            <a href="#">1</a>
                            <a href="#" class="active">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">»</a>
                        </div>
                        <p>Total Pages (16). kamu berada di No.: 2</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection