<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Iklan;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
        return view('landing.iklan.show', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Buat Iklan Baru'
        ];

        return view('landing.iklan.create', $data);
    }

    public function store(Request $request){
        DB::beginTransaction();
        $lastFile = $request->file('thumbnail')->store('images/iklan', 'public');

        $valid = Validator::make($request->all(), [
            'nama' => 'required|max:191',
            'deskripsi' => 'required',
            'no_telp' => 'required|min:5|max:15',
            'alamat'    => 'required|max:191',
            'thumbnail' => 'required|max:5120'
        ], [
            'nama.required' => 'Nama harus diisi',
            'nama.max' => 'Nama maksimal 191 karakter',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'no_telp.required' => 'No. Telepon harus diisi',
            'no_telp.max' => 'No. Telepon maksimal 191 karakter',
            'no_telp.min' => 'No. Telepon minimal 5 karakter',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.max' => 'Alamat maksimal 191 karakter',
            'thubmnail.required' => 'Thumbnail harus diisi'
        ]);

        if ($valid->fails()) {
            $message = '';
            foreach ($valid->errors()->all() as $error) {
                $message .= $error . '<br>';
            }
            return redirect()->route('landing.iklan.create')->with('toastr', toastr($message, 'warning'));
        }
        try {
            $slug = substr(Str::slug($request->nama), 0, 191);

            $checkSlug = Iklan::where('slug', '=', $slug)->count();
            while ($checkSlug) {
                $slug = substr($slug, 0, 186) . substr(bin2hex(openssl_random_pseudo_bytes(16)), 0, 5);
                $checkSlug = Iklan::where('slug', '=', $slug)->count();
            }
            
            $dataForInsert = [
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'no_telp'  => $request->no_telp,
                'alamat'  => $request->alamat,
                'thumbnail' => $lastFile,
                'slug'  => $slug,
                'user_id' => Auth::user()->id
            ];

            Iklan::create($dataForInsert);

            DB::commit();
            return redirect()
                ->route('landing.iklan.show', [$slug])
                ->with('toastr', toastr('Forum Anda berhasil dibuat', 'success'));
        } catch (QueryException $e) {
            Storage::delete($lastFile);
            DB::rollBack();

            return redirect()
                ->route('landing.iklan.create')
                ->with('toastr', toastr($e->getMessage(), 'error'));
        }

    }
}
