<?php

namespace App\Http\Middleware;

use Closure;

class TPMiddleware
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
        if(now()->format('s') % 2) {
            return $next($request);
        }
        dd("Requête bloquée par le middleware");
    }
}
