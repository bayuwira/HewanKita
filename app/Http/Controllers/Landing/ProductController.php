<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $produk = DB::table('produk_juals')->paginate(8);
        return view('landing.product.index', ['produk' => $produk]);
    }

    public function show($id)
    {
        $produk = DB::table('produk_juals')->where('slug', $id)->get();
        return view('landing.product.show', ['produk' => $produk]);
    }
}
