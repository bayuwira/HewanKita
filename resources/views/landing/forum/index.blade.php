@extends('landing.app')
@section('css')
    <style>
        body{
            background-color: #fff !important;
        }
        #forum{
            margin-top: 40px;
        }
    </style>
@endsection
@section('content')
<section class="first-content">
    <div class="container">
        <div class="mb-3">
            <h2 class="second-textcolor text-center mb-5">Forum</h2>
            <a href="#" class="btn btn-hewankita">Tambah</a>
        </div>
        <div id="search_menu">
            <div class="row" style="justify-content: space-between">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <span class="input-group-text btn"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="row" style="align-items: center;">
                        <div class="col-md-3">
                            <p class="mb-0 text-right">Filter : </p>
                        </div>
                        <div class="col-md-9">
                            <select name="" class="form-control">
                                <option value="">-- Tidak ada --</option>
                                <option value="terbuka">Terbuka</option>
                                <option value="terjawab">Terjawab</option>
                                <option value="tertutup">Tertutup</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="forum">
            <div class="row">
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
                @else
                    <div class="col-md-12">
                        <p class="text-center">Tidak ada forum</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection