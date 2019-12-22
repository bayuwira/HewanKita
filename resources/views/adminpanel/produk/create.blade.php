@extends('adminpanel.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Produk Jual</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('adminpanel.produk.index') }}">Produk Jual</a></li>
                    <li class="breadcrumb-item active">Tambah Produk Jual</li>
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
                    <form action="{{ route('adminpanel.produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Produk Jual</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" >
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea name="deskripsi" class="form-control ckeditor">{{ old('deskripsi') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">No. Telepon</label>
                                <input type="tel" name="no_telp" class="form-control" placeholder="ex. 08xxxxxxxx" pattern="[0-9]{9,15}" value="{{ old('no_telp') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Harga Jual</label>
                                <input type="text" class="form-control" name="harga_jual" format-uang  placeholder="ex: 150.000" value="{{ old('harga') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Harga Beli</label>
                                <input type="text" class="form-control" name="harga_beli" format-uang  placeholder="ex: 150.000" value="{{ old('harga') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input type="number" class="form-control" name="stok" value="{{ empty(old('stok')) ? 0 : old('stok') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Diskon</label>
                                <input type="number" class="form-control" name="stok" value="{{ empty(old('diskon')) ? 0 : old('diskon') }}">
                            </div>
                            <div class="form-group">
                                <label>Kondisi</label>
                                <select name="kondisi" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach (KondisiProduk() as $key => $value)
                                        <option value="{{ $key }}" {{ ($key === old('kondisi') ? 'selected' : '') }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                           </div>
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select name="produk_kategori_id" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach($KategoriProduk as $item)
                                        <option value="{{ $item->id }}" @if(old('produk_kategori_id') == $item->id) {{ 'selected' }} @endif>{{ $item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <img src="@if (!empty(old('photo_thumbnail'))) {{ old('photo_thumbnail') }} @endif" id="photo_thumbnail_img" style="@if (empty(old('photo_thumbnail'))) {{ 'display:none;' }} @else {{ 'display:block;' }} @endif max-width: 250px;margin-bottom: 15px;">
                                <input type="hidden" id="photo_thumbnail_text" name="photo_thumbnail" value="{{ old('photo_thumbnail') }}">
                                <button type="button" class="btn btn-warning btn-xs" id="photo_thumbnail">Browse server</button>
                                <button type="button" id="photo_thumbnail_clear" style="@if (empty(old('photo_thumbnail'))) {{ old('photo_thumbnail') }} {{ 'display: none;' }} @endif" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Clear</button>
                            </div> 
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger" id="btnReset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
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