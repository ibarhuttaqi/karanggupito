<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->guest()) {
            abort(403);
        }
        if(!auth()->check()) {
            abort(403);
        }
        if(!auth()->user()->is_admin) {
            abort(403);
        }

        return $next($request);
    }
}
