<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Detailuser;
use DB;
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
        $item = User::join('user_details', 'user_details.user_id', '=', 'users.id')
        ->where('users.id', '=', $id)
        ->where('users.hak_akses', '=', '1')
        ->firstOrFail();

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
            $input = $request->validate([
                'name'          => 'max:150|string|required',
                'email'         => 'max:150|string|required|unique:users,email',
                'password'      => 'max:150|string|required|confirmed|min:6',
                'alamat'        => 'max:150|string|required',
                'photo_thumbnail'     =>  'nullable|string|max:190',
                'no_telp'       =>  'string|required'
            ]);

            $dataForInsertDetailUser = [
                'no_telp'             => $input['no_telp'],
                'alamat'              => $input['alamat'],
                'photo_thumbnail'     => $input['photo_thumbnail']
            ];

            $dataForInsertUser = [
                'name'         => $input['name'],
                'email'            => $input['email'],
                'password'         => Hash::make($input['password']),
                'hak_akses'        => '1',          
            ];

            $user = User::create($dataForInsertUser);
            $dataForInsertDetailUser['user_id'] = $user->id;
            Detailuser::create($dataForInsertDetailUser);
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
        DB::beginTransaction();
        try{
            $user = User::findorFail($id);
            $input = $request->validate([
                'name'          => 'max:150|string|',
                'email'         => 'max:150|string|unique:users,email',
                'password'      => 'max:150|string|confirmed|min:6',
                'alamat'        => 'max:150|string|',
                'photo_thumbnail'     =>  'nullable|string|max:190',
                'no_telp'             =>  'string'
            ]);
            $dataForUpdateDetailUser = [
                'no_telp'             => $input['no_telp'],
                'alamat'              => $input['alamat'],
                'photo_thumbnail'     => $input['photo_thumbnail']
            ];
            
            if(!empty($input['photo_thumbnail']))
                $dataForUpdateDetailUser['photo_thumbnail'] = $input['photo_thumbnail'];

            $dataForUpdateUser = [
                'name'         => $input['name'],
            ];
            
                
            if(!empty($input['password'])){
                $dataForUpdateUser['password'] = Hash::make($input['password']);
            }
            if($user->email!=$input['email']){
                //cek kalo email yang baru tidak ada yang punya
                if(User::where('email', '=', $input['email'])->count() ==  0){
                    $dataForUpdateUser['email'] = $input['email'];
                }else{
                    return redirect()
                    ->route('adminpanel.pengguna.edit', [$id])
                    ->with('toastr', toastr('Gagal menggunakan email', 'error'));
                }
            }
            //cek kalo username tidak sama dengan di database
            if($user->name != $input['name']){
                //cek kalo username yang baru tidak ada yang punya
                if(User::where('name', '=', $input['name'])->count() ==  0){
                    $dataForUpdateUser['name'] = $input['name'];
                }else{
                    return redirect()
                    ->route('adminpanel.pengguna.edit', [$id])
                    ->with('toastr', toastr('Gagal menambahkan nama', 'error'));
                }
            }
            $user->update($dataForUpdateUser);
            Detailuser::findorFail($id)->update($dataForUpdateDetailUser);
            DB::commit();
            return redirect()
                ->route('adminpanel.pengguna.index')
                ->with('toastr', toastr('Berhasil mengubah data', 'success'));
        }catch(\Illuminate\Database\QueryException $e){
            DB::rollback();
            dd($e);
                return redirect()
                ->route('adminpanel.pengguna.edit', [$id])
                ->with('toastr', toastr('Gagal update data', 'error'));
        }
    }
    public function destroy($id){

    }
    public function data(){
         $data = User::join('user_details', 'users.id', '=', 'user_details.user_id')
                        ->where('users.hak_akses', '=', '1')
                        ->select('name','email','id')
                        ->get()
                        ->toArray();
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                        return "
                            <a href='" . route('adminpanel.pengguna.edit', [$data['id']]) . "' class='btn btn-warning btn-xs' onsubmit='return confirm('Apakah Anda yakin ingin melanjutkan?')>Edit</a>
                            <form method='POST' style='display: inline-block' action='" . route('adminpanel.pengguna.destroy', [$data['id']]) . "' onsubmit='return confirm(\"Apakah Anda yakin ingin melanjutkan?\")'>
                                " . csrf_field() . "
                                " . method_field('DELETE') . "
                                <button type='submit' class='btn btn-danger btn-xs'>Hapus</button>
                            </form>	
                        ";
                })
                ->rawColumns(['aksi'])
                ->make();
    }
}
