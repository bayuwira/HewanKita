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
<div class="section-main-forum">  
            <div class="container-fluid">   
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 py-2">
                                <div class="card my-2" id="post" style="width: 100%;">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-12 col-sm-12 mx-auto" id="user-detail" id="user-post">
                                            <div class="status mb-5">
                                                <span class="badge mb-2 float-right status-forum"  >Status Forum</span>
                                            </div>
                                            <div class="text-center px-2 detail-user">
                                                <img src="user.png" class="image-thumbnail user-image" align="">
                                                <h6 class="card-subtitle mb-2 text-muted">Username yang post forum</h6>
                                                <h8 class="card-subtitle my-2 text-muted">Tanggal Upload Forum</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-12 col-md-12 px-1">
                                            <div class="container  py-3">
                                                <h5 class="card-title">Judul Forum</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa tincidunt dui ut ornare lectus sit amet. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Auctor neque vitae tempus quam pellentesque nec nam aliquam sem. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Donec et odio pellentesque diam volutpat commodo sed egestas egestas. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. Et tortor at risus viverra adipiscing. Amet consectetur adipiscing elit pellentesque habitant morbi. Etiam tempor orci eu lobortis. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Lobortis scelerisque fermentum dui faucibus in ornare quam. Nec ultrices dui sapien eget mi proin sed. Arcu vitae elementum curabitur vitae nunc sed velit dignissim. Purus in massa tempor nec feugiat. Arcu dictum varius duis at consectetur lorem donec massa sapien. Consequat nisl vel pretium lectus quam id leo in. Nulla facilisi morbi tempus iaculis. Vitae justo eget magna fermentum iaculis.</p>
                                                <a href="#" class="card-link"><span class="badge mb-2 float-left tag-forum" >Tag Forum</span></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1>Jawaban</h1>
                                </div>
                                <div class="card my-2" id="post" style="width: 100%;">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-12 col-md-12 px-1">
                                            <div class="container px-4 py-3">
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa tincidunt dui ut ornare lectus sit amet. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Auctor neque vitae tempus quam pellentesque nec nam aliquam sem. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Donec et odio pellentesque diam volutpat commodo sed egestas egestas. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. Et tortor at risus viverra adipiscing. Amet consectetur adipiscing elit pellentesque habitant morbi. Etiam tempor orci eu lobortis. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Lobortis scelerisque fermentum dui faucibus in ornare quam. Nec ultrices dui sapien eget mi proin sed. Arcu vitae elementum curabitur vitae nunc sed velit dignissim. Purus in massa tempor nec feugiat. Arcu dictum varius duis at consectetur lorem donec massa sapien. Consequat nisl vel pretium lectus quam id leo in. Nulla facilisi morbi tempus iaculis. Vitae justo eget magna fermentum iaculis.</p>
                                                <a href="#" class="like "><i class="fa fa-thumbs-up"></i> Sukai Jawaban</a>
                                                <div class="input-group md-form form-sm form-2 my-3">
                                                  <input class="form-control my-0 py-1 border" type="text" placeholder="Balas Jawaban" aria-label="Jawab">
                                                  <div class="input-group-append">
                                                    <span  class="input-group-text btn lighten-3" id="basic-text1"><i class="fas fa-comment"></i></span>
                                                  </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-12 mx-auto" id="user-detail" id="user-post">
                                            <div class="text-center px-2">
                                                <br>
                                                <img src="user.png" class="image-thumbnail user-image" align="" >
                                                <h6 class="card-subtitle mb-2 text-muted">Username yang jawab</h6>
                                                <h8 class="card-subtitle my-2 text-muted">Tanggal jawab forum</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card my-2 px-3">
                                    <div class="form-group">
                                        <h6 class="card-title pt-3">Jawab forum ini</h6>
                                        <textarea class="form-control" id="comment" rows="10" placeholder="Jawab forum disini"> </textarea>
                                        <button class="btn float-right my-2">Jawab</button>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 py-2">
                            <div class="card my-2 py-4 px-4" id="forum_lain">
                                <h5 class="card-title">Forum Lainnya</h5>
                                <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                                <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                                <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                                <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                                <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                                <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                                <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                                <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                            </div>
                        </div>

                    </div>  
            </div>
</div>  
@endsection