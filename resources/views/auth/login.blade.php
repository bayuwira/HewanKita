@extends('landing.app')

@section('content')
<center>
    <div class="form-regis" style="background-color: white; margin-top: 120px; width: 500px; padding: 40px 40px;">
        <h2 style="font-size: 20px;">HEWAN<span style="color: #FC7FB2;">KITA.COM</span></h2><br>
        <div id="show-message"></div>
        <form action="{{ route('login') }}" method="post" id="form-login">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-hewankita">Login</button>
            </div>
        </form>
    </div><br>
    <p>Don't Have an account? <span><a href="{{ route('login') }}" style="color: #FC7FB2;">Register now</a></span></p>
</center>
@endsection

@section('js')
    <script>
        function alert(str, type = 'info'){
            return `<div class="alert alert-${type} alert-dismissible fade show" role="alert">` +
                str +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>'+
                '</button>'+
            '</div>';
        }
        $(document).ready(function () {
            $('#form-login').submit(function(e){
                e.preventDefault();

                var email = $('#email').val();
                var password = $('#password').val();

                $.ajax({
                    url: "{{ route('login') }}",
                    data: {
                        email,
                        password
                    },
                    method: 'POST',
                    dataType: 'json',
                    success: function(data){
                        if(data.error === true){
                            $('#show-message').html(
                                alert(data.message, 'danger')
                            ).hide().fadeIn(1000);
                        }else{
                            window.location = data.message;
                        }
                    },
                    error: function(data){

                        console.log(data);
                        const { responseJSON } = data;
                        const { errors } = responseJSON;


                        if(errors){
                            let errorsValue = Object.keys(errors).map(function(data){
                                return errors[data][0];
                            });


                            let listError = '<ul>';
                            errorsValue.forEach(function(data){
                                listError += ('<li>'+data+'</li>');
                            });
                            listError += '</ul>';

                            $('#show-message').html(
                                alert(listError, 'danger')
                            ).hide().fadeIn(1000);
                        }else{
                            $('#show-message').html(
                                alert(responseJSON.message, 'danger')
                            ).hide().fadeIn(1000);
                        }
                    }
                })
            })
        });
    </script>
@endsection
