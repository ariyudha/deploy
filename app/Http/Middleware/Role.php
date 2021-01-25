<?php

namespace App\Http\Middleware;

use App\Models\Level;
use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Level::isRole($role)) {
            return $next($request);
        }
        return abort(401);
    }
}
