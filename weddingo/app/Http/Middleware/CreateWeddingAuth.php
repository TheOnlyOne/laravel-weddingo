<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\WeddingManager;
use App\BuyingInvitationsHistory;

class CreateWeddingAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->permissions_level == 0)
        {
            $managers = Auth::user()->weddingManagers()->get();
            if(count($managers) == 0) {
                return $next($request);
            }
        }
        return redirect('/login');
    }
}
