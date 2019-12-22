<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PenggunaController extends Controller
{
    private $path = 'adminpanel.pengguna.';

    public function index(){
        $data = [
            'title' => 'Pengguna'
        ];
        
        return view($this->path.'index',$data);
    }
    
    public function edit($id){
        $item = null;
        $data = [
            'title' => 'Edit Profile Pengguna',
            'item' => $item
        ];
        return view($this->path.'edit',$data);
    }

    public function create(){
        $data = [
            'title' => 'Tambah Pengguna'
        ];
        return view($this->path.'create',$data);
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $this->validate(request(),[
                'name'          => 'max:150|string|required',
                'username'      => 'max:150|string|required|unique:users,username|without_spaces',
                'email'         => 'max:150|string|required|unique:users,email',
                'password'      => 'max:150|string|required|confirmed|min:6',
                'alamat'        => 'max:150|string|required',
                'thumbnail'     =>  'nullable|string|max:190',
                'no_telp'       =>  'string|required'
            ]);

            $dataForInsertDetailUser = [
                'name'                => $input['name'],
                'no_telp'             => $input['no_telp'],
                'alamat'              => $input['alamat'],
                'thumbnail'           => $input['thumbnail'],
            ];

            $dataForInsertUser = [
                'username'         => $input['username'],
                'email'            => $input['email'],
                'password'         => Hash::make($input['password']),
                'hak_akses'        => '1',          
            ];

            $user = User::create($dataForInsertUser);
            $dataForInsertDetailUser['user_id'] = $user->id;
            UserDetail::create($dataForInsertDetailUser);
            DB::commit();
            return redirect()
                ->route('adminpanel.pengguna.create')
                ->with('toastr', toastr('Berhasil menambahkan data', 'success'));
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback();
            return redirect()
                ->route('adminpanel.pengguna.create')
                ->with('toastr', toastr('Gagal menambahkan data', 'error'));
        }
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id){

    }

    public function data(){
        return DataTables::of(User::all());
    }
}
