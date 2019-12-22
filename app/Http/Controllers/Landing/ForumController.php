<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Forum'
        ];
        
        return view('landing.forum.index', $data);
    }
    public function show()
    {
        $data = [
            'title' => 'Forum'
        ];

        return view('landing.forum.show');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Forum'
        ];
        return view('landing.forum.create');
    }

    public function store(){
        DB::beginTransaction();
        try {
            DB::commit();
        } catch (QueryException $th) {
            DB::rollBack();
        }
    }
}
