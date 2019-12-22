 <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ Route('landing.home') }}">HEWAN<span id="kita">KITA.COM</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Ayo cari hewanmu . . .">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
                @if(!Auth::check())
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('register') }}">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('login') }}"> <i class="fas fa-camera"></i> Buat Iklan</a>
                        </li>
                    </ul>
                </div>
                @else
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('register') }}"><i class="fas fa-comments"></i> Komentar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('landing.forum')}}"> <i class="far fa-newspaper"></i> Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('landing.users.create')}}"> <i class="fas fa-camera"></i> Buat Iklan</a>
                        </li>
                        <li class="nav-item dropdown-navbar">
                        @php
                            $name = explode(" ", Auth::user()->name)
                        @endphp
                        <a class="nav-link" href="{{ Route('login') }}" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Halo, {{ $name[count($name)-1] }} </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ Route('landing.users.profile', [ Auth::user()->id]) }}"><i class="fas fa-users-cog"></i> Profile</a>
                                <a class="dropdown-item" href="{{ Route('landing.users.dashboard', [ Auth::user()->id]) }}"><i class="fas fa-folder-open"></i> Iklan-ku</a>
                                <a class="dropdown-item" href="{{ Route('landing.users.dashboard_forum', [ Auth::user()->id]) }}"><i class="fas fa-newspaper"></i> Forum-ku</a>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </nav>
    </div>
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
