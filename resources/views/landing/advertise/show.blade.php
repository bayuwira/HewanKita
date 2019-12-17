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
                            <button type="button" class="btn btn-hubungi" data-toggle="modal" data-target="#exampleModalCenter" >Hubungi Penjual</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="chat_window">
                                        <div class="top_menu">
                                            <div class="title">Penjual 1 <span style="color: #FC7FB2" >0821417467236</span></div>
                                        </div>
                                        <ul class="messages"></ul>
                                        <div class="bottom_wrapper clearfix">
                                            <div class="message_input_wrapper">
                                                <input class="message_input" placeholder="Type your message here...">
                                            </div>
                                            <div class="send_message">
                                                <div class="icon"></div>
                                                <div class="text">Send</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message_template">
                                        <li class="message">
                                            <div class="avatar"></div>
                                            <div class="text_wrapper">
                                                <div class="text"></div>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </div>
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