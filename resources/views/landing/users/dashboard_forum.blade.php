@extends('landing.app')
@section('content')
    <section id="dashboard_forum">
        <div class="container-fluid">
            <div class="row mt-3" id="top-row">
                <div class="col-lg-4 col-md-6 col-sm-12 pl-5 py-2">
                <a role="button" class="btn btn-pink" href="{{ Route('landing.users.create_forum')}}" id="TambahButton">Tambah Forum<i class="fa fa-plus pl-1"></i></a>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 pr-3 py-2">
                                                <div id="searchbar">    
                                <div class="input-group md-form form-sm form-2 pl-0">
                                  <input class="form-control my-0 py-1 border" type="text" placeholder="Search" aria-label="Search">
                                  <div class="input-group-append">
                                    <span  class="input-group-text btn btn-pink lighten-3" id="basic-text1"><i class="fas fa-search"></i></span>
                                  </div>
                                </div>
                            </div>
                </div>
            </div>
                <div class="row mt-3" id="bottom-row">
                    <div class="col-lg-4 col-md-6 col-sm-12 pl-5 py-2">
                        <div id="iklan-populer">
                            <div class="card" >
                              <div class="card-header">
                                <h3 class="card-title">Forum Anda yang populer</h3>
                              </div>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                              </ul>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 pr-3 py-2">
                        <label for="table-forum" class="font-weight-bold">Forum yang anda punya</label>
                        <div id="table-forum">
                            <table class="table table-striped ">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col" class=" text-center">Judul Forum</th>
                                  <th scope="col" class=" text-center">Kategori</th>
                                  <th scope="col" class=" text-center">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Ayam</td>
                                  <td class="text-center">
                                     <a role="button" class="btn btn-status" href="add_produk.php" >Tutup<i class="fa fa-edit pl-1"></i></a>
                                    <a role="button" class="btn btn-delete" href="add_produk.php" >Hapus<i class="fa fa-trash pl-1"></i></a>
                                    <a role="button" class="btn btn-primary" href="add_produk.php" >Lihat<i class="fa fa-arrow-right pl-1"></i></a>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Burung</td>
                                  <td class="text-center">
                                     <a role="button" class="btn btn-status" href="add_produk.php" >Tutup<i class="fa fa-edit pl-1"></i></a>
                                    <a role="button" class="btn btn-delete" href="add_produk.php" >Hapus<i class="fa fa-trash pl-1"></i></a>
                                    <a role="button" class="btn btn-primary" href="add_produk.php" >Lihat<i class="fa fa-arrow-right pl-1"></i></a>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Ikan</td>
                                  <td class="text-center">
                                    <a role="button" class="btn btn-status" href="add_produk.php" >Tutup<i class="fa fa-edit pl-1"></i></a>
                                    <a role="button" class="btn btn-delete" href="add_produk.php" >Hapus<i class="fa fa-trash pl-1"></i></a>
                                    <a role="button" class="btn btn-primary" href="add_produk.php" >Lihat<i class="fa fa-arrow-right pl-1"></i></a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </sect>    
    </section>
    
@endsection