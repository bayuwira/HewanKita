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
                    @foreach($iklan_detail as $iklan)
                        <div class="col-md-8">
                            <img class="img-fluid" src="{{ url('storage/',$iklan->thumbnail) }}" alt="">
                        </div>
                        <div class="col-md-4">
                            <h1 class="my-3">{{$iklan->nama}}</h1>
                            <h4>{{$iklan->alamat}}</h4>
                            <button type="button" class="btn btn-hubungi" data-toggle="modal" data-target="#exampleModalCenter" >Hubungi Penjual</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="chat_window">
                                        <div class="top_menu">
                                            <div class="title">{{$iklan->nama_penjual}} <span style="color: #FC7FB2" >{{$iklan->no_telp}}</span></div>
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
                    @endforeach
                    </div>
                </div>
                <div class="col-md-2 recomendation-container">
                    <h4>Lihat Ini Juga</h4>
                    @foreach($hewan as $h)
                        <div class="recomendation">
                            <a href="{{ Route('landing.iklan.show',[$h->slug])}}"> <img class="img-fluid" src="{{$h->thumbnail}}" alt=""></a>    
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="ads-desc">
        <div class="row post-content">
        @foreach($iklan_detail as $iklan)
            <div class="content-container clearfix">
                <div class="col-md-12">
                    <ul class="mail-list">
                        <li>
                            <a href="">
                                <span class="sub-heading">{{$iklan->nama}}</span>
                                <span class="subtopic_description">Discussion of the controls of applet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="sub-heading">Deskripsi</span>
                                <span class="subtopic_description">{{$iklan->deskripsi}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
        </div>
    </section>
@endsection