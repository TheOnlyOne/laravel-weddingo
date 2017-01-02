<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Wedding;

class clientAuth
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
            if(count($managers) != 0) {
                $packageHistory = $managers[0]->wedding()->get()[0]->buyingInvitationsHistory()->get();
                if(count($packageHistory) != 0)
                    return $next($request);
            }
        }
        return redirect('/pricing');
    }
}
