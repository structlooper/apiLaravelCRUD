<?php

namespace App\Http\Middleware;

use Closure;

class tokenKeyMiddleware
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
        $token = $request->header('token');
        if ($token == 'ABCDEFGH') {
            
            return $next($request);
        }
        return response()->json(['message' => 'Wrong token please provide correct token key'],404);
    }
}
