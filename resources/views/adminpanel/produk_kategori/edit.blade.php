@extends('adminpanel.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Kategori Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('adminpanel.kategori.produk.index') }}">Kategori Produk</a></li>
                    <li class="breadcrumb-item active">Edit Kategori Produk</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .hadiah-container{
            position: relative;
            margin-bottom: 10px;
        }

        .hadiah-container::after{
            content: " ";
            display: block;
            clear: both;
        }

        .hadiah-container .left{
            width: 30%;
            float: left;
            padding-right: 5px;
        }

        .hadiah-container .right{
            width: 70%;
            float: left;
            padding-left: 5px;
        }
    </style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        @if ($errors->any())
            <div class="mt-2 mb-2">
                <div class="alert alert-danger">
                    <ul style="margin-bottom: 0px">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-7">
                <div class="card card-info card-outline">
                    <form action="{{ route('adminpanel.kategori.produk.update', [$item->slug]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Kategori Produk</label>
                                <input type="text" class="form-control" name="nama"  placeholder="" value="{{ empty(old('nama')) ? $item->nama : old('nama') }}" >
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger" id="btnReset">Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection