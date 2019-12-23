@extends('landing.app')
@section('content')
 <section id="product">
        <div class="container">
            <div class="card">
                <div class="row">
                    @foreach($produk as $item)
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div> <a href="#"><img class="img-fluid" src={{ $item->photo_thumbnail }}></a></div>
                            </div> <!-- slider-product.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
                        <article class="card-body p-5">
                            <h3 class="title mb-3">{{ $item->nama }}</h3>
                            <p class="price-detail-wrap">
                                <span class="price h3 text-warning">
                                    <span class="currency">RP </span><span class="num">{{ $item->harga_jual }}</span>
                                </span>
                            </p> <!-- price-detail-wrap .// -->
                            <dl class="item-property">
                                <dt>Deskripsi</dt>
                                <dd>
                                    <p>{{ $item->deskripsi }} </p>
                                </dd>
                            </dl>
                            <dl class="param param-feature">
                                <dt>Dikirim</dt>
                                <dd>Seluruh dunia</dd>
                            </dl> <!-- item-property-hor .// -->
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <dl class="param param-inline">
                                        <dt>Jumlah: </dt>
                                        <dd>
                                            <select class="form-control form-control-sm" style="width:70px;">
                                            @for($i = 1; $i <= $item->stok; $i++)
                                                <option value="{{ $i }}"> {{ $i }} </option>
                                            @endfor
                                            </select>
                                        </dd>
                                    </dl> <!-- item-property .// -->
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <hr>
                            <a href="#" class="btn btn-lg btn-hewankita text-uppercase"> Beli sekarang </a>
                            <a href="{{ Route('landing.cart') }}" class="btn btn-lg btn-hewankita text-uppercase"> <i class="fas fa-shopping-cart"></i> </a>
                        </article> <!-- card-body.// -->
                    </aside>
                    @endforeach <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
        </div>
    </section>
    <section id="product-desc">
        <div class="row post-content">
            <div class="content-container clearfix">
            @foreach($produk as $p)
                <div class="col-md-12">
                    <ul class="mail-list">
                        <li>
                            <a href="">
                                <span class="sub-heading">{{$p->nama}}</span>
                                <span class="subtopic_description">Discussion of the controls of applet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="sub-heading">Deskripsi</span>
                                <span class="subtopic_description">{{$p->deskripsi}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection