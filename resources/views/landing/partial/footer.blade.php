    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
            $('.form-group input.form-control').focus(function () {
                $('label[for="'+$(this).attr('id')+'"]').addClass('active');
                // alert('oke');
            }).blur(function () {
                if(!$(this).val())
                    $('label[for="'+$(this).attr('id')+'"]').removeClass('active');
            })
        })
    </script>

    @yield('js')
</body>

</html>