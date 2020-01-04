<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Produk;
use App\Keranjang;
use Auth;
use DB;
class CartController extends Controller
{
    public function index(){
       $cart =  Keranjang::join('produk_juals', 'produk_juals.id', '=', 'keranjangs.produk_jual_id')
                    ->join('produk_kategoris','produk_kategoris.id','=','produk_juals.produk_kategori_id')
                    ->select('keranjangs.jumlah AS jumlah','produk_kategoris.nama AS kategori','produk_juals.nama AS nama','produk_juals.harga_jual AS harga','produk_juals.photo_thumbnail AS photo')
                    ->get();  
        $total = 0;
       
        $data = [
            'produk' => $cart
        ];
    
       return view('landing.cart.index',$data);
    }

    public function store(Request $request){
        DB::beginTransaction();
        $valid = Validator::make($request->all(), [
            'jumlah'         => 'required|integer',
        ]);
        
        if ($valid->fails()) {
            $message = '';
            foreach ($valid->errors()->all() as $error) {
                $message .= $error . '<br>';
            }
            return redirect()->route('landing.cart.index')->with('toastr', toastr($message, 'warning'));
        }
        try {
            $dataForInsert = [
                'user_id'        => Auth::user()->id,
                'produk_jual_id' => $request->produk_id,
                'jumlah'         => $request->jumlah
            ];
            $is_duplicate = Keranjang::where('produk_jual_id','=',$request->produk_id)
            ->where('user_id','=',Auth::user()->id);
            if($is_duplicate->count())
            {
              $product = $is_duplicate->first();
              $product->update([
                  'jumlah' => DB::raw('jumlah+'.$request->jumlah)
              ]);
            }else{
                Keranjang::create($dataForInsert);
            }
           
            DB::commit();
            return redirect()
                ->route('landing.cart.index')
                ->with('toastr', toastr('Berhasil', 'success'));
        } catch (QueryException $e) {
            DB::rollBack();
            return redirect()
                ->route('landing.cart.index')
                ->with('toastr', toastr($e->getMessage(), 'error'));
        }
    }
    
}
