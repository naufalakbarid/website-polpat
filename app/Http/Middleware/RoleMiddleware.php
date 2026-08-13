<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
   public function handle($request, \Closure $next, $role)
    {
        if ($request->user()->role !== $role) {
            abort(403, 'AKSES DITOLAK: Anda tidak memiliki wewenang untuk masuk ke area ini.');
        }

    return $next($request);
    }
}
