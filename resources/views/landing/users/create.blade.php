@extends('landing.app')
@section('content')
<section id="create-ads-rama">
        <div class="container-fluid">
            <div class="second-textcolor text-center">
                <h2>BUAT IKLAN</h2>
            </div>
            <div class="row px-3 py-3">
                <div class="col-lg-4 col-sm-12 col-md-12 border-right-1">
                    <div class="container">
                        <!-- upload image dan image preview -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-rama btn-file-rama">
                                        Browse… <input type="file" id="imgInp">
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
                                <input type="text" name="nama_iklan" class="form-control" id="Namaiklan" placeholder="Nama produk">
                            </div>
                            <div class="form-group">
                                <label for="desc">Deskripsi Produk</label>
                                <textarea name="deskripsi" class="form-control ckeditor" id="desc_product"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Pengiklan</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Pengiklan">
                            </div>
                            <div class="form-group">
                                <label for="telp">No Telp</label>
                                <input type="text" name="telp" class="form-control" id="telp" placeholder="No Telp Pegiklan">
                            </div>
                            <button class="btn btn-primary">Tambah Iklan</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    $(document).ready( function() {
        $(document).on('change', '.btn-file-rama :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file-rama :file').on('fileselect', function(event, label) {
            
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
                    $('#img-upload-rama').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });     
    });
    </script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function(){
            var config = {
                filebrowserBrowseUrl: '{{ config("APP_URL") }}/ckfinder/browser',
                removeDialogTabs: 'link:upload;image:Upload;image:advanced;link:advanced',
                removeButtons: 'Anchor,Table,HorizontalRule,Superscript,Subscript,Indent,Outdent,Blockquote,About,Scayt,Styles,SpecialChar',
                format_tags: 'p;h1;h2;h3;h4;h5;h6'
            }

            var editor = CKEDITOR.replace('ckfinder', config);
            CKFinder.setupCKEditor(editor);
            $('#btnReset').click(function(){
                btnFoto('remove')
            });
            $('#photo_thumbnail').click(function(){
                CKFinder.popup( {
                    chooseFiles: true,
                    onInit: function( finder ) {
                        finder.on( 'files:choose', function( evt ) {
                            var file = evt.data.files.first();
                            var url = file.getUrl();
                            $('#photo_thumbnail_text').val(url);
                            $('#photo_thumbnail_img').attr('src', url).css('display', 'block');
                            $('#photo_thumbnail_clear').show();
                        } );
                        finder.on( 'file:choose:resizedImage', function( evt ) {
                            var url = evt.data.resizedUrl;
                            $('#photo_thumbnail_text').val(url);
                            $('#photo_thumbnail_img').attr('src', url).css('display', 'block');
                            $('#photo_thumbnail_clear').show();
                        } );
                    }
                });
            });
            $('#photo_thumbnail_clear').click(function(){
                $('#photo_thumbnail_text').val(null);
                $('#photo_thumbnail_img').attr('src', null).hide();
                $(this).hide();
            });

        });
    </script>
@endsection