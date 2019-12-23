@extends('adminpanel.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('adminpanel.pengguna.index') }}">Pengguna</a></li>
                    <li class="breadcrumb-item active">Edit Pengguna</li>
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
                    <form action="{{ route('adminpanel.pengguna.update', [$item->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" name="name" value="{{ empty(old('name')) ? $item->name: old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ empty(old('email')) ? $item->email : old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">No. Telepon</label>
                                <input type="tel" name="no_telp" class="form-control" placeholder="ex. 08xxxxxxxx"pattern="[0-9]{9,15}" value="{{ empty(old('no_telp')) ? $item->no_telp : old('no_telp') }}">
                                @if ($errors->has('no_telp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ empty(old('alamat')) ? $item->alamat: old('alamat') }}">
                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="Password" id="password-confirm" name="password" class="form-control">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirmation Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                            <div class="form-group">
                                <label>Thumbnail</label><br>
                                @php($foto = !empty(old('photo_thumbnail')) ? old('photo_thumbnail') : $item->thumbnail)
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