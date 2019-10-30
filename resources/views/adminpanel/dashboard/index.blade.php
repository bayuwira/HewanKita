@extends('adminpanel.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pengguna</span>
                        <span class="info-box-number">10 Orang</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-12">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-crown"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Advertise</span>
                        <span class="info-box-number">65 item</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-3 col-sm-12">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-light elevation-1"><i class="fas fa-th-list"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Produk</span>
                        <span class="info-box-number">12 item</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-3 col-sm-12">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-history"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Riwayat</span>
                        <span class="info-box-number">14 item</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

        </div>
    </div>
@endsection