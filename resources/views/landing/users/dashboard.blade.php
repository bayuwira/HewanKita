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
    <div class="section">
        <div class="container-fluid">
            <div class="row mt-3" id="top-row">
                <div class="col-lg-4 col-md-6 col-sm-12 pl-5 py-2">
                    <a role="button" class="btn btn-rama2" href="{{ Route('landing.users.create')}}" id="TambahButton">Tambah iklan<i class="fa fa-plus pl-1"></i></a>
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
                                  <td class="text-center iklan-dashboard">
                                    <a role="button" class="btn btn-rama2" href="add_produk.php" >edit<i class="fa fa-edit pl-1 text-primary"></i></a>
                                    <a role="button" class="btn btn-rama2" href="add_produk.php" >delete<i class="fa fa-trash pl-1 text-danger"></i></a>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td class="text-center iklan-dashboard">
                                    <a role="button" class="btn btn-rama2" href="add_produk.php" >edit<i class="fa fa-edit pl-1 text-primary"></i></a>
                                    <a role="button" class="btn btn-rama2" href="add_produk.php" >delete<i class="fa fa-trash pl-1 text-danger"></i></a>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td class="text-center iklan-dashboard">
                                    <a role="button" class="btn btn-rama2" href="add_produk.php" >edit<i class="fa fa-edit pl-1 text-primary"></i></a>
                                    <a role="button" class="btn btn-rama2" href="add_produk.php" >delete<i class="fa fa-trash pl-1 text-danger"></i></a>
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
@section('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection