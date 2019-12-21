@extends('landing.app')
@section('content')
<section id="cart">
        <div class="px-4 px-lg-0">
            <!-- For demo purpose -->
            <div class="container text-white py-5 text-center">
            </div>
            <!-- End -->
            <div class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Produk</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Harga</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Jumlah</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Aksi</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg"
                                                        alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="#"
                                                                class="text-dark d-inline-block align-middle">Timex Unisex
                                                                Originals</a></h5><span
                                                            class="text-muted font-weight-normal font-italic d-block">Category:
                                                            Watches</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="border-0 align-middle"><strong>Rp 15.000</strong></td>
                                            <td class="border-0 align-middle"><strong><input type="number" class="form-control text-center product-qty" value="1"></strong></td>
                                            <td class="border-0 align-middle"><a href="#" class="text-dark"><i
                                                        class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg" alt="" width="70"
                                                        class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex
                                                                Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category:
                                                            Watches</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="border-0 align-middle"><strong>Rp 15.000</strong></td>
                                            <td class="border-0 align-middle"><strong><input type="number" class="form-control text-center product-qty"
                                                        value="1"></strong></td>
                                            <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5 p-4 bg-white rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Kode Kupon</div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Punya kupon? Masukkin sinih</p>
                                <div class="input-group mb-4 border rounded-pill p-2">
                                    <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3"
                                        class="form-control border-0">
                                    <div class="input-group-append border-0">
                                        <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i
                                                class="fa fa-gift mr-2"></i>Apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Pesan untuk seller
                            </div>
                            <div class="p-4">
                                <p class="font-italic mb-4">JIka kamu punya pesan untuk seller silahkan tulis disini</p>
                                <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Detail pesanan </div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Pengiriman tergantung di daerah mana kamu tinggal</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                            class="text-muted">Total pembelian </strong><strong>$390.00</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                            class="text-muted">Biaya packing dan pengiriman</strong><strong>$10.00</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                            class="text-muted">Pajak</strong><strong>$0.00</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                            class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">Rp 1 M</h5>
                                    </li>
                                </ul><a href="#" class="btn btn-hewankita rounded-pill py-2 btn-block">BAYAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection