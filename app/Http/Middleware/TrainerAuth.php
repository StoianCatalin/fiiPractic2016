<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role;

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
        $role = Role::where('role', 'trainer')->first()->id;
        if (!Auth::check()) {
            return redirect('/cont');
        }
        else if (Auth::user()->role_id!=$role) {
            abort(404);
        }
        return $next($request);
    }
}
