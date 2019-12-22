@extends('adminpanel.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Produk Jual</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('adminpanel.produk.index') }}">Produk Jual</a></li>
                    <li class="breadcrumb-item active">Edit Produk Jual</li>
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
                    <form action="{{ route('adminpanel.produk.update', [$item->slug]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Kategori Produk</label>
                                <input type="text" class="form-control" name="nama"  placeholder="" value="{{ empty(old('nama')) ? $item->nama : old('nama') }}" >
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control ckeditor">{{ empty(old('deskripsi')) ? $item->deskripsi : old('deskripsi') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">No. Telepon</label>
                                <input type="tel" name="no_telp" class="form-control" placeholder="ex. 08xxxxxxxx" pattern="[0-9]{9,15}" value="{{ empty(old('no_telp')) ? $item->no_telp : old('no_telp') }}">
                            </div>
                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="text" class="form-control" name="harga_jual" format-uang  placeholder="ex: 150.000" value="{{ empty(old('harga_jual')) ? number_format($item->harga_jual, 0, ',', '.') : old('harga_jual') }}">
                            </div>
                            <div class="form-group">
                                <label>Harga Beli</label>
                                <input type="text" class="form-control" name="harga_beli" format-uang  placeholder="ex: 150.000" value="{{ empty(old('harga_beli')) ? number_format($item->harga_beli, 0, ',', '.') : old('harga_beli') }}">
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="number" class="form-control" name="stok" value="{{ empty(old('stok')) ? $item->stok : old('harga_beli') }}">
                            </div>
                            <div class="form-group">
                                <label>Diskon</label>
                                <input type="number" class="form-control" name="diskon" value="{{ empty(old('diskon')) ? $item->diskon : old('diskon') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Produk</label>
                                <select name="produk_kategori_id" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @php($kategori_produk = (empty(old('produk_kategori_id')) ? $item->produk_kategori_id : old('produk_kategori_id')))
                                    @foreach (KondisiProduk() as $key => $value)
                                        <option value="{{ $key }}" {{ ($key === $kategori_produk ? 'selected' : '') }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thumbnail</label><br>
                                @php($foto = !empty(old('photo_thumbnail')) ? old('photo_thumbnail') : $item->photo_thumbnail)
                                <img src="@if (!empty($foto)) {{ $foto }} @endif" id="photo_thumbnail_img" style="@if (empty($foto)) {{ 'display:none;' }} @else {{ 'display:block;' }} @endif max-width: 250px;margin-bottom: 15px;">
                                <input type="hidden" id="photo_thumbnail_text" name="photo_thumbnail" value="{{ $foto }}">
                                <button type="button" class="btn btn-warning btn-xs" id="photo_thumbnail">Browse server</button>
                                <button type="button" id="photo_thumbnail_clear" style="@if (empty($foto)) {{ $foto }} {{ 'display: none;' }} @endif" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Clear</button>
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