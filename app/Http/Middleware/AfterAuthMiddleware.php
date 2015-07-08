<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class AfterAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

    
        if (User::all()->first()->role == 'admin') {
            return redirect('user/admin');
        } else if (User::all()->first()->role == 'user') {
             return redirect('user/user');
        }
        return $next($request);
    }
}
