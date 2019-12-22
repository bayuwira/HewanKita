<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function create()
    {
        return view('landing.users.create');
    }
    public function dashboard($id)
    {
        return view('landing.users.dashboard');
    }
}
