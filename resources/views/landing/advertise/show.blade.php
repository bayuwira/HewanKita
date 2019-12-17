@extends('landing.app')
@section('content')
     <section id="ads-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="my-4">Nama Hewan
                        <small>Tag</small>
                    </h1>
                    <div class="row">
                        <div class="col-md-8">
                            <img class="img-fluid" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="col-md-4">
                            <h1 class="my-3">Anjing Kintamani</h1>
                            <h2>Rp 150.000</h2>
                            <h4>Singaraja, Denpasar</h4>
                            <button type="button" class="btn btn-hubungi" data-toggle="modal" data-target="#exampleModal" >Hubungi Penjual</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 recomendation-container">
                    <h4>Lihat Ini Juga</h4>
                    <div class="recomendation">
                        <img class="img-fluid" src="http://placehold.it/750x500" alt="">
                    </div>
                    <div class="recomendation">
                        <img class="img-fluid" src="http://placehold.it/750x500" alt="">
                    </div>
                    <div class="recomendation">
                        <img class="img-fluid" src="http://placehold.it/750x500" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ads-desc">
        <div class="row post-content">
            <div class="content-container clearfix">
                <div class="col-md-12">
                    <ul class="mail-list">
                        <li>
                            <a href="">
                                <span class="sub-heading">Anjiing Kintamani</span>
                                <span class="subtopic_description">Discussion of the controls of applet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="sub-heading">Deskripsi</span>
                                <span class="subtopic_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi.
                                    Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam
                                    salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque,
                                    ad nobis propriae quaerendum sea.</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection