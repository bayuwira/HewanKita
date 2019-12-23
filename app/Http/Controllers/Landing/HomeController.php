<?php

namespace App\Http\Controllers\Landing;

use App\Forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Iklan;
use App\Produk;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'hewan' => Iklan::inRandomOrder(8)->get(),
            'produk' => Produk::limit(4)->get(),
            'forum' => Forum::inRandomOrder(4)->get()
        ];

        return view('landing.home.index', $data);
    }
}
