<?php

namespace App\Http\Controllers\Landing;

use App\Forum;
use App\ForumDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForumController extends Controller
{
    private $path = 'landing.forum.';

    public function index()
    {
        $data = [
            'title' => 'Forum',
            'forum' => Forum::paginate(10)
        ];
        
        return view($this->path.'index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Forum'
        ];
        return view($this->path.'create', $data);
    }

    public function store(Request $request){
        DB::beginTransaction();
        $valid = Validator::make($request->all(), [
            'judul' => 'required',
            'konten' => 'required'
        ],[
            'judul.required' => 'Judul harus diisi',
            'konten.required' => 'Konten harus diisi'
        ]);

        if($valid->fails()){
            $message = '';
            foreach($valid->errors()->all() as $error){
                $message .= $error . '<br>';
            }
            return redirect()->route('landing.forum.create')->with('toastr', toastr($message, 'warning'));
        }
        try {
            $slug = substr(Str::slug($request->judul), 0, 191);
            
            $checkSlug = Forum::where('slug', '=', $slug)->count(); 
            while($checkSlug){
                $slug = substr($slug, 0, 186) . substr(bin2hex(openssl_random_pseudo_bytes(16)), 0, 5);
                $checkSlug = Forum::where('slug', '=', $slug)->count();
            }

            $dataForInsert = [
                'judul' => $request->judul,
                'konten' => $request->konten,
                'slug'  => $slug,
                'user_id' => Auth::user()->id
            ];

            Forum::create($dataForInsert);

            DB::commit();
            return redirect()
                            ->route('landing.forum.show', [$slug])
                            ->with('toastr', toastr('Forum Anda berhasil dibuat', 'success'));
        } catch (QueryException $th) {
            DB::rollBack();

            return redirect()
                            ->route('landing.forum.create')
                            ->with('toastr', toastr('Forum Anda gagal dibuat', 'error'));
        }
    }

    public function show($id)
    {
        $forum = Forum::where('slug', '=', $id)
                        ->firstOrFail();
        $forumLain = Forum::inRandomOrder(10)->where('id', '!=', $forum->id)->get();
        $user = User::where('id', '=', $forum->user_id)
                        ->firstOrFail();

        $data = [
            'title' => $forum->judul.' - Lihat Forum',
            'forum' => $forum,
            'forum_lain' => $forumLain,
            'user'  => $user
        ];

        return view($this->path.'show', $data);
    }

    public function store_comment(Request $request, $id){
        DB::beginTransaction();
        $valid = Validator::make($request->all(), [
            'comment' => 'required',
        ], [
            'comment.required' => 'Jawaban harus diisi',
        ]);

        if ($valid->fails()) {
            $message = '';
            foreach ($valid->errors()->all() as $error) {
                $message .= $error . '<br>';
            }
            return redirect()->route('landing.forum.show', [$id])->with('toastr', toastr($message, 'warning'));
        }
        try {
            $forum = Forum::where('slug', '=', $id)->firstOrFail();
            $dataForInsert = [
                'comment' => $request->comment,
                'forum_id' => $forum->id,
                'user_id'   => Auth::user()->id
            ];

            ForumDetail::create($dataForInsert);

            DB::commit();
            return redirect()
                ->route('landing.forum.show', [$id])
                ->with('toastr', toastr('Jawaban Anda berhasil dibuat', 'success'));
        } catch (QueryException $th) {
            DB::rollBack();

            return redirect()
                ->route('landing.forum.show', [$id])
                ->with('toastr', toastr('Jawaban Anda gagal dibuat', 'error'));
        }
    }


}
