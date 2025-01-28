<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! Gate::allows('saas-admin', Auth::user())) {
            abort(403);
        }

        return $next($request);
    }
}
