<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // $credentials = [
        // 'email'    => 'admin@admin.com',
        // 'password' => '123123'
        // ];

        // if (! Auth::attempt($credentials)) {
        //     return 'Incorrect username and password combination';
        // }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        return $next($request);
    }


}
