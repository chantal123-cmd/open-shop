<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //dd('hello hello');
        //if (Auth::user() != null && Auth::user()->isAdmin())
        if (!Auth::user()->isAdmin()) {
            return abort(401);
        }

        return $next($request);
    }
}
