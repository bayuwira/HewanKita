@extends('landing.app')
@section('content')
 <section id="product">
        <div class="container">
            <form action="{{ route('landing.cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="card">
                <div class="row">
                    <input type="hidden" name="produk_id" value="{{ $produk->id }}" class="form-control">
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div> <a href="#"><img class="img-fluid" src={{ $produk->photo_thumbnail }}></a></div>
                            </div> <!-- slider-product.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
                        <article class="card-body p-5">
                            <h3 class="title mb-3">{{ $produk->nama }}</h3>
                            <p class="price-detail-wrap">
                                <span class="price h3 text-warning">
                                    <span class="currency">RP </span><span class="num">{{ $produk->harga_jual }}</span>
                                </span>
                            </p> <!-- price-detail-wrap .// -->
                            <dl  class="item-property">
                                <dt>Deskripsi</dt>
                                <dd>
                                    <p name="deskripsi">{{ $produk->deskripsi }} </p>
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
                                            <select name="jumlah" class="form-control form-control-sm" style="width:70px;">
                                            @for($i = 1; $i <= $produk->stok; $i++)
                                                <option value="{{ $i }}"> {{ $i }} </option>
                                            @endfor
                                            </select>
                                        </dd>
                                    </dl> <!-- item-property .// -->
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <hr>
                            <button type="submit"  value="beli" class="btn btn-lg btn-hewankita text-uppercase">Beli sekarang</button>
                            {{-- <a href="{{ Route('landing.list_cart') }}" class="btn btn-lg btn-hewankita text-uppercase"> </a> --}}
                            <button type="submit" value="keranjang" class="btn btn-lg btn-hewankita text-uppercase"><i class="fas fa-shopping-cart"></i></button>
                        </article> <!-- card-body.// -->
                    </aside>
                </div> <!-- row.// -->
            </div> <!-- card.// -->
            </form>
        </div>
    </section>
    <section id="product-desc">
        <div class="row post-content">
            <div class="content-container clearfix">
                <div class="col-md-12">
                    <ul class="mail-list">
                        <li>
                            <a href="">
                                <span class="sub-heading">{{$produk->nama}}</span>
                                <span class="subtopic_description">Discussion of the controls of applet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="sub-heading">Deskripsi</span>
                                <span class="subtopic_description">{{$produk->deskripsi}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection