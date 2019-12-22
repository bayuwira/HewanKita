@extends('landing.app')
@section('content')
<header class="bg-middleware text-black-50">
    <div class="container text-center header-container">
        <h1 class="main-textcolor">BUAT IKLANMU, DIAMAPUN, KAPANPUN DI HEWAN<span id="kita">KITA.COM</span></h1>
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
<div class="section_mainrama">
        <div class="container-fluid">
            <div class="row px-3 py-3">
                <div class="col-lg-4 col-sm-12 col-md-12 border-right-1">
                    <div class="container">
                        <!-- upload image dan image preview -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn-rama btn-file">
                                        Browse… <input type="file" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload' class="img-thumbnail img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12">
                    <div class="container">
                        <div class="card px-2 py-2">
                            <div class="form-group">
                                <label for="Namaiklan">Nama Iklan</label>
                                <input type="text" name="nama_iklan" class="form-control" id="Namaiklan" placeholder="Nama produk">
                            </div>
                            <div class="form-group">
                                <label for="desc">Deskripsi Produk</label>
                                <textarea name="desc_product" class="form-control" id="desc_product" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Pengiklan</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Pengiklan">
                            </div>
                            <div class="form-group">
                                <label for="telp">No Telp</label>
                                <input type="text" name="telp" class="form-control" id="telp" placeholder="No Telp Pegiklan">
                            </div>
                            <button class="btn-rama btn-primary">Tambah Iklan</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });     
    });
    </script>
@endsection