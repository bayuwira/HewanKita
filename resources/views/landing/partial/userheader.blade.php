 <div class="contaiiner-fluid">
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
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('login') }}"><i class="fas fa-user"></i> Halo, user</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ Route('register') }}"><i class="fas fa-comments"></i> Komentar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""> <i class="fas fa-journal-whills"></i> Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""> <i class="fas fa-camera"></i> Buat Iklan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>