<?php

namespace App\Http\Middleware;

use Closure;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if (\App\Models\Level::isLevel($level)) {
            return $next($request);
        }
        return abort(401);
    }
}
