<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
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
            $input = $request->validate([
                'nama'                =>  'string|required',
                'deskripsi'           =>  'string|required',
                'no_telp'             =>  'string|required',
                'photo_thumbnail'     =>  'string|required',
                'harga_jual'          =>  'string|required',
                'harga_beli'          =>  'string|required',
                'stok'                =>  'integer|required',
                'diskon'              =>  'integer|required',
                'produk_kategori_id'  =>  'integer|required'
            ]);
            $input['slug'] = substr(str_slug($input['nama'], '-'), 0, 190);

            $dataForInsertProduk = [
				'nama'             		=> $input['nama'],
				'deskripsi'   		    => $input['deskripsi'],
				'no_telp'         	    => $input['no_telp'],
				'photo_thumbnail'       => $input['photo_thumbnail'],
				'harga_jual'			=> ((int) str_replace('.', '', $input['harga_jual'])),
				'harga_beli'		    => ((int) str_replace('.', '', $input['harga_beli'])),
				'stok'			        => $input['stok'],
                'slug'					=> $input['slug'],
                'diskon'                => $input['diskon'],
				'produk_kategori_id'	=> $input['produk_kategori_id'],
            ];
            Produk::create($dataForInsertProduk);
            DB::commit();
            return redirect()
                            ->route('adminpanel.produk.index')
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
        
        DB::beginTransaction();

        try {
            $item = Produk::where('slug', '=', $id)->firstOrFail();

            $input = $request->validate([
                'nama'                =>  'string|required',
                'deskripsi'           =>  'string|required',
                'no_telp'             =>  'string|required',
                'photo_thumbnail'     =>  'nullable|string|max:190',
                'harga_jual'          =>  'string|required',
                'harga_beli'          =>  'string|required',
                'stok'                =>  'integer|required',
                'diskon'              =>  'integer|required',
                'produk_kategori_id'  =>  'integer|required'
            ]);
            $input['slug'] = substr(str_slug($input['nama'], '-'), 0, 190);
            $dataForUpdate = [
                'nama'             		=> $input['nama'],
				'deskripsi'   		    => $input['deskripsi'],
				'no_telp'         	    => $input['no_telp'],
				'photo_thumbnail'       => $input['photo_thumbnail'],
				'harga_jual'			=> ((int) str_replace('.', '', $input['harga_jual'])),
				'harga_beli'		    => ((int) str_replace('.', '', $input['harga_beli'])),
				'stok'			        => $input['stok'],
                'slug'					=> $input['slug'],
                'diskon'                => $input['diskon'],
				'produk_kategori_id'	=> $input['produk_kategori_id'],
            ];

            if(!empty($input['photo_thumbnail']))
                $dataForUpdate['photo_thumbnail'] = $input['photo_thumbnail'];

            $item->update($dataForUpdate);
            DB::commit();
            return redirect()
                ->route('adminpanel.produk.index')
                ->with('toastr', toastr('Berhasil mengubah data', 'success'));
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback();
            return redirect()
                ->route('adminpanel.produk.edit', [$id])
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
        try {
            $item = Produk::where('slug', '=', $id)->firstOrFail();
            $item->delete();
            DB::commit();
            return redirect()
                ->route('adminpanel.produk.index')
                ->with('toastr', toastr('Berhasil menghapus data', 'success'));
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback();
            return redirect()
                ->route('adminpanel.produk.index')
                ->with('toastr', toastr('Gagal menghapus data', 'error'));
        }
    }
    public function data(){
        $data = Produk::all();
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                        return "
                            <a href='" . route('adminpanel.produk.edit', [$data['slug']]) . "' class='btn btn-warning btn-xs' onsubmit='return confirm('Apakah Anda yakin ingin melanjutkan?')>Edit</a>
                            <form method='POST' style='display: inline-block' action='" . route('adminpanel.produk.destroy', [$data['slug']]) . "' onsubmit='return confirm(\"Apakah Anda yakin ingin melanjutkan?\")'>
                                " . csrf_field() . "
                                " . method_field('DELETE') . "
                                <button type='submit' class='btn btn-danger btn-xs'>Hapus</button>
                            </form>	
                        ";
                })
                ->editColumn('harga',function($data){
                    return '<label class="badge badge-info">Beli </label>'.number_format($data['harga_beli'],0, ',', '.').'<br>'.
                    '<label class="badge badge-success">Jual </label>'.number_format($data['harga_jual'],0, ',', '.');
                   
                })
                ->rawColumns(['aksi','harga'])

                ->make();
    }  
}
