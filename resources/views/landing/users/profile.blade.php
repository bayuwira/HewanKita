@extends('landing.app')
@section('content')
    <section id="section-profile">
        <div class="container">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="my-2 card px-5 py-5">
            <h3 class="card-title">User Profile</h3>
            <button class="btn btn-pink" id="editButton">Edit Profile<i class="fa fa-edit pl-2"></i></button>
            <form id="Profile" method="post" action="{{route('landing.users.update', [$user->id])}}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 px-2 py-2">
                <div id="Image">
                    <div class="form-group">
                            <img id='img-upload' src="{{ url('storage/'.$user->thumbnail) }}"  class="img-thumbnail img-fluid" />
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-file btn-pink">
                                        Browse… <input type="file" name="photo" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" value="{{$user->thumbnail}}" readonly>
                            </div>
                        </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 px-2">
                <div id="data-profile" class="pt-5">
                    <div class="form-group">
                        <label for="user_nama">Nama</label>
                        <input type="text"  name="name" class="form-control" id="user_nama" aria-describedby="namaHelp" value="{{$user->name}}" readonly>
                        <small id="namaHelp" class="form-text text-muted">Masukan namanya biar orang tahu kamu itu siapa!</small>
                    </div>
                    <div class="form-group">
                        <label for="No_telp">No Telp</label>
                        <input type="text" name="telp" name="no_telp" class="form-control" id="No_telp" aria-describedby="TelpHelp" value="{{$user->no_telp}}" readonly>
                        <small id="TelpHelp" class="form-text text-muted">No Telp yang aktif ya biar orang mudah menghubungi kamu!</small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" aria-describedby="AlamatHelp" name="alamat" readonly>{{$user->alamat}}</textarea>
                        <small id="TelpHelp" class="form-text text-muted">Jangan terlalu lengkap ya , nanti yang lengkapnya lewat chat aja</small>
                    </div>
                    </div>
                <div id="accountDetails" class="py-5">
                    <h5 class="card-title pb-2">Account Detail</h5>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name='email' value="{{$user->email}}" aria-describedby="emailHelp" readonly>
                        <small id="emailHelp" class="form-text text-muted">Emailnya gabakal disebar kok</small>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" aria-describedby="passhelp" readonly>
                        <small id="passhelp" class="form-text text-muted">Inputin passwornya ya , pake login</small>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input type="password" class="form-control" id="password-confirm" aria-describedby="confpass" readonly>
                        <small id="passhelp" class="form-text text-muted">Harus sama dong sama yang diatas , masa beda</small>
                    </div>
                    <button type="submit" id="submitButton" class="btn btn-pink">Simpan</button>
                </div>
                </div>
            </div>
            </form>
            </div>
        </div>    
    </section>
@endsection
@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {     
        document.getElementById('submitButton').style.visibility =  'hidden';
    });
    document.getElementById('editButton').onclick = function(){
        var f = document.getElementsByTagName('input');
        for(var i=0;i<f.length;i++)
            f[i].removeAttribute('readonly');
        var f = document.getElementsByTagName('textarea');
        for(var i=0;i<f.length;i++)
        f[i].removeAttribute('readonly');
        document.getElementById('submitButton').style.visibility =  'visible';
    };

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