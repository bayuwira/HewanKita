@extends('landing.app')
@section('content')
    <div class="section section-main-rama2">
        <div class="container-fluid">
            <div class="row mt-3" id="top-row">
                <div class="col-lg-4 col-md-6 col-sm-12 pl-5 py-2">
                    <a role="button" class="btn-rama2" href="add_produk.php" id="TambahButton">Tambah iklan<i class="fa fa-plus pl-1"></i></a>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 pr-3 py-2">
                            <div id="searchbar">    
                                <div class="input-group md-form form-sm form-2 pl-0">
                                    <input class="form-control my-0 py-1 border" type="text" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                    <span  class="input-group-text btn-rama2 lighten-3" id="basic-text1"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                <div class="row mt-3" id="bottom-row">
                    <div class="col-lg-4 col-md-6 col-sm-12 pl-5 py-2">
                        <div id="iklan-populer">
                            <div class="card-rama" >
                                <div class="card-header-rama">
                                    <h3 class="card-title-rama">Iklan anda yang populer</h3>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="">Cras justo odio</a></li>
                                    <li class="list-group-item"><a href="">Dapibus ac facilisis in</a></li>
                                    <li class="list-group-item"><a href="">Vestibulum at eros</a></li>
                                    <li class="list-group-item"><a href="">Vestibulum at eros</a></li>
                                    <li class="list-group-item"><a href="">Vestibulum at eros</a></li>
                                    <li class="list-group-item"><a href="">Vestibulum at eros</a></li>
                                    <li class="list-group-item"><a href="">Vestibulum at eros</a></li>
                                    <li class="list-group-item"><a href="">Vestibulum at eros</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 pr-3 py-2">
                        <label for="table-iklan" class="font-weight-bold">Iklan yang anda Punya</label>
                        <div id="table-iklan">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col" class="col-nama text-center">Nama Iklan</th>
                                    <th scope="col" class="col-handle text-center">Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>
                                    <a role="button" class="btn-rama2" href="add_produk.php" >edit<i class="fa fa-edit pl-1"></i></a>
                                    <a role="button" class="btn-rama2" href="add_produk.php" >delete<i class="fa fa-trash pl-1"></i></a>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>
                                    <a role="button" class="btn-rama2" href="add_produk.php" >edit<i class="fa fa-edit pl-1"></i></a>
                                    <a role="button" class="btn-rama2" href="add_produk.php" >delete<i class="fa fa-trash pl-1"></i></a>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>
                                    <a role="button" class="btn-rama2" href="add_produk.php" >edit<i class="fa fa-edit pl-1"></i></a>
                                    <a role="button" class="btn-rama2" href="add_produk.php" >delete<i class="fa fa-trash pl-1"></i></a>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>    
    </div>
@endsection