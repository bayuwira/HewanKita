<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\UserDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class UsersController extends Controller
{
    public function profile($id)
    {
        $user = User::join('user_details', 'user_details.user_id','=','users.id')
                ->where('users.id','=', Auth::user()->id)
                ->firstOrFail();
        $data =[
            'title'=>'Profile',
            'user' => $user
        ];
        return view('landing.users.profile',$data);
    }
    public function create()
    {
        return view('landing.users.create');
    }
    public function dashboard($id)
    {
        return view('landing.users.dashboard');
    }
    public function create_forum()
    {
        return view('landing.users.create_forum');
    }
    public function dashboard_forum($id)
    {
        return view('landing.users.dashboard_forum');
    }
    public function update(Request $request)
    {
        $updatedata = $request->validate([
            'name' => 'string|max:190|required',
            'email' => 'string|max:190|required',
            'telp' => 'string|max:14|required',
            'alamat' => 'string|max:190|required'
        ]);
       
        $namafile ='';
        DB::beginTransaction();
        try{
            $namafile = $request->photo->store('images/user', 'public');
            User::where('users.id','=',$request->id)->update([
                'name' => $updatedata['name'],
                'email' => $updatedata['email']
            ]);

            UserDetail::where('user_id','=',$request->id)->update([
            'no_telp' => $updatedata['telp'],
            'alamat' => $updatedata['alamat'],
            'thumbnail'    => $namafile,
            ]);
            DB::commit();
            return redirect()
                        ->route('landing.users.profile', [$request->id])
                        ->with('toastr', toastr('Profile berhasil di update', 'success'));

        }catch(\Illuminate\Database\QueryException $e) {
            Storage::delete($namafile);
            DB::rollback();
            return redirect()
            ->route('landing.users.profile', [$request->id])
            ->with('toastr', toastr('Gagal mengupdate data', 'error'));
        }

        
    }
    
}
