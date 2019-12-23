<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IklanController extends Controller
{
    public function index()
    {
        $iklan = DB::table('produk_iklans')->paginate(4);
        return view('landing.advertise.index',['iklan' => $iklan]);
    }
    public function show($id)
    {
        $data = [
            'iklan_detail' => DB::table('produk_iklans')
                                            ->join('users',  'produk_iklans.user_id', '=', 'users.id')
                                            ->select('produk_iklans.*', 'users.name as nama_penjual')
                                            ->where('.produk_iklans.slug',$id)
                                            ->get(),
            'hewan' => DB::table('produk_iklans')->limit(3)->get()
        ];
        return view('landing.advertise.show', $data);
    }

    public function create()
    {
        return view('landing.users.create');
    }
}
