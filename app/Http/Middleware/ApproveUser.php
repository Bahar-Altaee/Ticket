<?php

namespace App\Http\Middleware;

use Closure;

class ApproveUser
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
        if ($request->user() && !$request->user()->approved) {
            return redirect('/')->with('error', 'Your account is not approved yet.');
        }
    
        return $next($request);
    }
    
}
