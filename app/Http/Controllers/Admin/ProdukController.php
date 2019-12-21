<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produk;
use App\ProdukKategori;
use DB;
class ProdukController extends Controller
{
    private $path = 'adminpanel.produk.';

    public function index()
    {
        $data = [
            'title'     => 'Produk',
            'produk'    => Produk::all()
        ];
        return view($this->path.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'create',['KategoriProduk' => ProdukKategori::orderBy('nama','DESC')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try{

            DB::commit();
            return redirect()
                            ->route('admin.penilaian.create')
                            ->with('toastr', toastr('Berhasil menambahkan data', 'success'));

        }catch(Iluminate\Database\QueryException $e ){
            DB::rollback();
            return redirect()
                    ->route('admin.penilaian.create')
                    ->with('toastr', toastr('Gagal menambahkan data', 'error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produk::where('slug','=',$id)->firstOrFail();
        return view($this->path.'edit',[
            'title' => 'Edit Produk Jual',
            'item' => $data 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
