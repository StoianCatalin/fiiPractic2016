<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TrainerAuth
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
        if (!Auth::check()) {
            return redirect('/cont');
        }
        else if (Auth::user()->type!=1) {
            abort(404);
        }
        return $next($request);
    }
}
