@extends('landing.app')
@section('content')
 <section id="product">
        <div class="container">
            <div class="card">
                <div class="row">
                @foreach($produk as $p)
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div> <a href="#"><img class="img-fluid" src="{{$p->photo_thumbnail}}"></a></div>
                            </div> <!-- slider-product.// -->
                            <div class="img-small-wrap">
                                <div class="item-gallery"> <img class="img-fluid" src="{{$p->photo_thumbnail}}"> </div>
                                <div class="item-gallery"> <img class="img-fluid" src="{{$p->photo_thumbnail}}"> </div>
                                <div class="item-gallery"> <img class="img-fluid" src="{{$p->photo_thumbnail}}"> </div>
                                <div class="item-gallery"> <img class="img-fluid" src="{{$p->photo_thumbnail}}"> </div>
                            </div> <!-- slider-nav.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
                        <article class="card-body p-5">
                            <h3 class="title mb-3">{{$p->nama}}</h3>
                            <p class="price-detail-wrap">
                                <span class="price h3 text-warning">
                                    <span class="currency">Rp. </span><span class="num">{{$p->harga_jual}}</span>
                                </span>
                                <span>/per kg</span>
                            </p> <!-- price-detail-wrap .// -->
                            <dl class="item-property">
                                <dt>Description</dt>
                                <dd>
                                    <p>{{$p->deskripsi}} </p>
                                </dd>
                            </dl>
                            <dl class="param param-feature">
                                <dt>Stok</dt>
                                <dd>{{$p->stok}}</dd>
                            </dl> <!-- item-property-hor .// -->
                            <dl class="param param-feature">
                                <dt>Color</dt>
                                <dd>Black and white</dd>
                            </dl> <!-- item-property-hor .// -->
                            <dl class="param param-feature">
                                <dt>Delivery</dt>
                                <dd>Russia, USA, and Europe</dd>
                            </dl> <!-- item-property-hor .// -->
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <dl class="param param-inline">
                                        <dt>Quantity: </dt>
                                        <dd>
                                            <select class="form-control form-control-sm" style="width:70px;">
                                                <option> 1 </option>
                                                <option> 2 </option>
                                                <option> 3 </option>
                                            </select>
                                        </dd>
                                    </dl> <!-- item-property .// -->
                                </div> <!-- col.// -->
                                <div class="col-sm-7">
                                    <dl class="param param-inline">
                                        <dt>Size: </dt>
                                        <dd>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <span class="form-check-label">SM</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <span class="form-check-label">MD</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <span class="form-check-label">XXL</span>
                                            </label>
                                        </dd>
                                    </dl> <!-- item-property .// -->
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <hr>
                            <a href="#" class="btn btn-lg btn-hewankita text-uppercase"> Beli sekarang </a>
                            <a href="{{ Route('landing.cart') }}" class="btn btn-lg btn-hewankita text-uppercase"> <i class="fas fa-shopping-cart"></i> </a>
                        </article> <!-- card-body.// -->
                    </aside> <!-- col.// -->
                @endforeach
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