<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IklanController extends Controller
{
    public function index()
    {
        return view('landing.advertise.index');
    }
    
    public function show()
    {
        return view('landing.advertise.show');
    }

    public function create()
    {
        return view('landing.users.create');
    }
}