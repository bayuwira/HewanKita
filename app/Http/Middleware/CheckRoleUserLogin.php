<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRoleUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$hak_akses)
    {
        $user_role = Auth::user()->hak_akses;
        foreach (explode('|', $hak_akses) as $role) {
            if($user_role == $role)
                return $next($request);
        }

        return abort(404);
    }
}
