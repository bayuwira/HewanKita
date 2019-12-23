<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'hewan' => DB::table('produk_iklans')->inRandomOrder()->get(),
            'produk' => DB::table('produk_juals')->limit(4)->get()
        ];
        return view('landing.home.index', $data);
    }
}
