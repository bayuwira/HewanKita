<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\ProdukKategori;
use Illuminate\Support\Facades\DB;

class ProdukKategoriController extends Controller
{
    private $path = 'adminpanel.produk_kategori.';

    public function index()
    {
        $data = [
            'title'     => 'Kategori Produk',
            'produk_kategori'    => ProdukKategori::all()
        ];
        return view($this->path . 'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori Produk'
        ];
        return view($this->path . 'create', $data);
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
        try {
            $input = $request->validate([
                'nama'          => 'string|max:190|required|unique:produk_kategoris,nama',
                'icon'          => 'string|required'
            ]);

            $input['slug'] = substr(str_slug($input['nama'], '-'), 0, 190);

            $dataForInsertKategoriProduk = [
                'nama'      => $input['nama'],
                'slug'		=> $input['slug'],
                'icon'      => $input['icon']
            ];
           
            ProdukKategori::create($dataForInsertKategoriProduk);

            DB::commit();
            return redirect()
                ->route('adminpanel.kategori.produk.index')
                ->with('toastr', toastr('Berhasil menambahkan data', 'success'));
        }catch(\Illuminate\Database\QueryException $e) {
            DB::rollback();
            return redirect()
                ->route('adminpanel.kategori.produk.create')
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
        $item = ProdukKategori::where('slug', '=', $id)->firstOrFail();
        
        $data = [
            'title' => 'Edit Kategori Produk',
            'item'  => $item
        ];

        return view($this->path . 'edit', $data);
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
        DB::beginTransaction();
        try {
            $item = ProdukKategori::where('slug', '=', $id)->firstOrFail();
            $input = $request->validate([
                'nama'          => 'string|max:190|required',
                'icon'          => 'string|max:190'
            ]);

            $input['slug'] = substr(str_slug($input['nama'], '-'), 0, 190);

            $dataForUpdateKategoriProduk = [
                'nama'      => $input['nama'],
                'slug'		=> $input['slug'],
                'icon'      => $input['icon']
            ];
            if($item->nama!=$input['nama']){
                if(ProdukKategori::where('nama', '=', $input['nama'])->count() ==  0){
                    $dataForUpdateKategoriProduk['nama'] = $input['nama'];
                }else{
                    return back()->withInput()
                    ->with('toastr', toastr('Gagal menggunakan nama', 'error'));
                }
            }
            $item->update($dataForUpdateKategoriProduk);
            DB::commit();
            return redirect()
                ->route('adminpanel.kategori.produk.index')
                ->with('toastr', toastr('Berhasil mengubah data', 'success'));
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback();
            return redirect()
                ->route('adminpanel.kategori.produk.edit', [$item->slug])
                ->with('toastr', toastr('Gagal mengubah data', 'error'));
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try{
            $data = ProdukKategori::where('slug','=',$id)->firstOrFail();
            $data->delete();
            DB::commit();
            return redirect()
                ->route('adminpanel.kategori.produk.index')
                ->with('toastr', toastr('Berhasil menghapus data', 'success'));
        }catch(\Illuminate\Database\QueryException $e){
            DB::rollback();
            return redirect()
                ->route('adminpanel.kategori.produk.index')
                ->with('toastr', toastr('Gagal menghapus data', 'error'));
        }
    }
    
    public function data(){
        $data = ProdukKategori::all();
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                        return "
                            <a href='" . route('adminpanel.kategori.produk.edit', [$data['slug']]) . "' class='btn btn-warning btn-xs' onsubmit='return confirm('Apakah Anda yakin ingin melanjutkan?')>Edit</a>
                            <form method='POST' style='display: inline-block' action='" . route('adminpanel.kategori.produk.destroy', [$data['slug']]) . "' onsubmit='return confirm(\"Apakah Anda yakin ingin melanjutkan?\")'>
                                " . csrf_field() . "
                                " . method_field('DELETE') . "
                                <button type='submit' class='btn btn-danger btn-xs'>Hapus</button>
                            </form>	
                        ";
                })
                ->editColumn('icon', function($data){
                    return '<i class="fas '.$data['icon'].'"></i>';
                })
                ->rawColumns(['aksi', 'icon'])
                ->make();
        }  
    
}
