<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produk;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Produk',
            'produk' => Produk::paginate(5) 
        ];
        return view('landing.product.index',$data);
    }

    public function show($id)
    {
        $data = [
            'title' => 'Produk_detail',
            'produk' => Produk::where('slug', '=', $id)->firstOrFail()
        ];
        
        return view('landing.product.show',$data);
    }
}
