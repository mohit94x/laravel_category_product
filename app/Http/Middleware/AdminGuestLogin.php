<?php

namespace App\Http\Middleware;

use Closure;

class AdminGuestLogin
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
        if (\Auth::guard('admin')->check()) {
            return redirect()->route('admin-dashboard');
        } else {
            return $next($request);
        }
    }
}
