<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
                
        return view('adminpanel.dashboard.index', $data);
    }
}
