@extends('landing.app')
@section('content')
<section id="create-ads-rama">
        <div class="container-fluid">
            <div class="second-textcolor text-center">
                <h2>BUAT IKLAN</h2>
            </div>
            <form action="{{ route('landing.iklan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row px-3 py-3">
                    <div class="col-lg-4 col-sm-12 col-md-12 border-right-1">
                        <div class="container">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-rama btn-file-rama">
                                            Browse… <input type="file" name="thumbnail">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload-rama' class="img-thumbnail img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12 col-md-12">
                        <div class="container">
                            <div class="card px-2 py-2">
                                <div class="form-group">
                                    <label for="Namaiklan">Nama Iklan</label>
                                    <input type="text" name="nama" class="form-control" id="Namaiklan" placeholder="Nama produk">
                                </div>
                                <div class="form-group">
                                    <label for="desc">Deskripsi Produk</label>
                                    <textarea name="deskripsi" class="form-control" style="height: 250px"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Pengiklan</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Pengiklan">
                                </div>
                                <div class="form-group">
                                    <label for="telp">No Telp</label>
                                    <input type="text" name="no_telp" class="form-control" id="telp" placeholder="No Telp Pegiklan">
                                </div>
                                <button class="btn btn-primary">Tambah Iklan</button>
                            </div>
                        </div>
                    </div>
                </div>    
            </form>
        </div>
    </section>

@endsection
@section('js')
    <script>
    $(document).ready( function() {
        $(document).on('change', '.btn-file-rama :file', function() {
            var elem = $(this)[0];

            if(elem.files[0]){
                readURL(elem);
                $(this).parent().parent().parent().find(':text').val(elem.files[0].name);
            }else{
                toastr.warning('Tidak ada file yang dimasukan');
            }
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload-rama').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }   
    });
    </script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
@endsection