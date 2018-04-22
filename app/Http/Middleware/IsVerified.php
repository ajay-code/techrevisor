<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsVerified
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
        if (! is_null($request->user()) && ! $request->user()->verified) {
            Auth::logout();
            alert()->info('Please verify your account.', 'Account not verified')->autoclose(3000);
            return back();
        }
        return $next($request);
    }
}
