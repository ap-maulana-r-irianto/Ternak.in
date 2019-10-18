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
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        if (Auth::guard('admin')->check()) {
            return redirect('admin/dashboard');
        }elseif (Auth::guard('peternak')->check()) {
            return redirect('peternak/dashboard');
        }elseif (Auth::guard('investor')->check()) {
            return redirect('investor/dashboard');
        }elseif (Auth::guard('pembeli')->check()) {
            return redirect('pembeli/dashboard');
        }



        return $next($request);
    }
}
