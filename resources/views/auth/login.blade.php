@extends('landing.app')

@section('content')
<center>
    <div class="form-regis" style="background-color: white; margin-top: 100px; width: 500px; padding: 30px 30px;">
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
            <div class="tombol">
                <button>Login</button>
            </div>
        </form>
    </div><br>
    <p>Don't Have an account? <span><a href="register.php" style="color: #FC7FB2;">Register now</a></span></p>
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
                        console.log(data);
                    },
                    error: function(data){

                        console.log(data);
                        const { responseJSON } = data;
                        const { errors } = responseJSON;


                        if(typeof(errors)){
                            let errorsValue = Object.keys(errors).map(function(data){
                                return errors[data][0];
                            });


                            let listError = '<ul>';
                            errorsValue.forEach(function(data){
                                listError += ('<li>'+data+'</li>');
                            });
                            listError += '</ul>';

                            $('#show-message').html(
                                alert(listError, 'warning')
                            ).hide().fadeIn(1000);
                        }else{
                            
                        }
                    }
                })
            })
        });
    </script>
@endsection
