<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Produk;
use App\Transaksi;
use App\TransaksiDetails;
use DB;
class CheckoutController extends Controller
{
    public function checkout(){
        $data = [
            'user_id' => Auth::user()->id,
         
        ];
        return view('landing.cart.index',$data);
    }
    public function store(Request $request){
        $input = $this->validate(request(),[ 
            'nama'
        ]);
        DB::beginTransaction();
        try {
            
            $total = 0;
            foreach($request->produks as $produk){
                $total += $produk['jumlah'] * $package['harga']; 
            }

            $dataForInsert = [
                'total' => $total,
                'user_id'  => Auth::user()->id
            ];

            $transaksi = Transaksi::create($dataForInsert);

            $dataForInsertDetail = [];
            foreach ($request->packages as $package) {
                array_push($dataForInsertDetail, [
                    'transaksi_id' => $transaksi->id,
                    'produk_jual_id' => $package['id'],
                    'harga' => $package['harga'],
                    'jumlah'   => $package['jumlah'],
                    
                ]);
            }

            TransaksiDetail::insert($dataForInsertDetail);
            DB::commit();
            return 'ok';
        }
        catch (QueryException $e) {
            DB::rollBack();
            return 'error';
        }
    }
}
