<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function index()
    {
        return view('landing.forum.index');
    }
    public function show()
    {
        return view('landing.forum.show');
    }
    public function create(){
        return view('landing.forum.create');
    }
}
