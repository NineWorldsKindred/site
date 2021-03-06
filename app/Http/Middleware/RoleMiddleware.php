<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(!$request->user()->hasRole($role)) {
            return redirect()->back()->withErrors('msg', 'Not authorized');
        }
        return $next($request);
    }
}
