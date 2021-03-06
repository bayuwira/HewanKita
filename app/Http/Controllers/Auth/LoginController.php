<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/control-panel';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
    }

    // public function authenticated()
    // {
    //     $user = Auth::user();
    //     if($user->hak_akses == '1')
    //     {
    //         return redirect()->route('adminpanel.dashboard.index');
    //     } else{
    //         return redirect()->route('landing.home');
    //     }
    // }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user()) ? response()->json([
            'error' => true,
            'message' => 'Anda sudah login'
        ]) : response()->json([
            'error' => false,
            'message' => (Auth::user()->hak_akses === 1) ? route('adminpanel.dashboard.index') : route('landing.home')
        ]);
    }
    
}
