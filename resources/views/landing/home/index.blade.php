@extends('landing.app')
@section('content')
<header class="bg-middleware text-black-50">
    <div class="container text-center header-container">
        <h1 class="main-textcolor">SELAMAT DATANG HEWAN<span id="kita">KITA.COM</span></h1>
        <p class="lead main-textcolor">Sebuah Website yang menghubungkan anda dengan seluruh fauna di dunia !</p>
        <div class="row animal-header">
            <a href=""><i class="fas fa-dog"></i></a>
            <a href=""><i class="fas fa-cat"></i></a>
            <a href=""><i class="fas fa-crow"></i></a>
            <a href=""><i class="fas fa-fish"></i></a>
            <a href=""><i class="fas fa-spider"></i></a>
            <a href=""><i class="fas fa-otter"></i></a>
        </div>
    </div>
</header>
<section id="pets-need">
    <div class="container">
        <div class="second-textcolor text-center">
            <h2>MEREKA BUTUH KAMU</h2>
        </div>
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Anjing</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                    <a href="{{ Route('landing.advertise') }}" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Anjing</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                            magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="ads_detail.html" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Anjing</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="ads_detail.html" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Anjing</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                            magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="ads_detail.html" class="btn btn-hewankita">SAYA MAU !</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="ads.html" class="btn btn-mid">SAYA MAU YANG LAIN</a>
        </div>
    </div>
</section>
<section id="forum">
    <div class="container">
        <div class="second-textcolor text-center">
            <h2>FORUM TERBAIK</h2>
        </div>
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Forum Reptile</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-hewankita">TAMPILKAN</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Forum Mammalia</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                            magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-hewankita">TAMPILKAN</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Forum Unggas</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-hewankita">TAMPILKAN</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Forum Amphibi</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                            magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-hewankita">TAMPILKAN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <div class="container">
        <div class="col-md-12 text-center">
            <h2>Tim Developer</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg">
                    </div>
                    <div class="team-content">
                        <h3>Bayu Wira</h3>
                        <span class="post"> Front End Developer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fab fa-facebook"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-google-plus"></a></li>
                        <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg">
                    </div>
                    <div class="team-content">
                        <h3>Rama Suryananda</h3>
                        <span class="post"> Front End Developer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fab fa-facebook"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-google-plus"></a></li>
                        <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg">

                    </div>
                    <div class="team-content">
                        <h3>Giri Kusuma</h3>
                        <span class="post"> Front End Developer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fab fa-facebook"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-google-plus"></a></li>
                        <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row section-team">
        <div class="col-md-6 col-sm-6 team-manager">
            <div class="our-team">
                <div class="pic">
                    <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg">

                </div>
                <div class="team-content">
                    <h3>Agus Wahyu</h3>
                    <span class="post"> Full Stack Developer </span>
                </div>
                <ul class="social">
                    <li><a href="" class="fab fa-facebook"></a></li>
                    <li><a href="" class="fab fa-twitter"></a></li>
                    <li><a href="" class="fab fa-google-plus"></a></li>
                    <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg">

                </div>
                <div class="team-content">
                    <h3>Dharma Putra</h3>
                    <span class="post"> Back End Developer </span>
                </div>
                <ul class="social">
                    <li><a href="" class="fab fa-facebook"></a></li>
                    <li><a href="" class="fab fa-twitter"></a></li>
                    <li><a href="" class="fab fa-google-plus"></a></li>
                    <li><a href="www.instagram.com/in/raj-kumar-web-designer" class="fab fa-instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div> 
@endsection
