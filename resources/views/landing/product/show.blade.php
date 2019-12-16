@extends('landing.app')
@section('content')
 <section id="product">
        <div class="container">
            <div class="card">
                <div class="row">
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div> <a href="#"><img class="img-fluid" src="http://placehold.it/750x500"></a></div>
                            </div> <!-- slider-product.// -->
                            <div class="img-small-wrap">
                                <div class="item-gallery"> <img class="img-fluid" src="http://placehold.it/750x500"> </div>
                                <div class="item-gallery"> <img class="img-fluid" src="http://placehold.it/750x500"> </div>
                                <div class="item-gallery"> <img class="img-fluid" src="http://placehold.it/750x500"> </div>
                                <div class="item-gallery"> <img class="img-fluid" src="http://placehold.it/750x500"> </div>
                            </div> <!-- slider-nav.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
                        <article class="card-body p-5">
                            <h3 class="title mb-3">Original Version of Some product name</h3>
                            <p class="price-detail-wrap">
                                <span class="price h3 text-warning">
                                    <span class="currency">US $</span><span class="num">1299</span>
                                </span>
                                <span>/per kg</span>
                            </p> <!-- price-detail-wrap .// -->
                            <dl class="item-property">
                                <dt>Description</dt>
                                <dd>
                                    <p>Here goes description consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco </p>
                                </dd>
                            </dl>
                            <dl class="param param-feature">
                                <dt>Model#</dt>
                                <dd>12345611</dd>
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
                            <a href="#" class="btn btn-lg btn-hewankita text-uppercase"> <i class="fas fa-shopping-cart"></i> </a>
                        </article> <!-- card-body.// -->
                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
        </div>
    </section>
    <section id="product-desc">
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
                                    Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur
                                    animi.
                                    Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option.
                                    Utinam
                                    salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari
                                    conclusionemque,
                                    ad nobis propriae quaerendum sea.</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection