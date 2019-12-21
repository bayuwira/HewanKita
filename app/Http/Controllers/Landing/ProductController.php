<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('landing.product.index');
    }

    public function show()
    {
        return view('landing.product.show');
    }
}
