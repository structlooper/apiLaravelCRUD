<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
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
        // $token = $request->header('token');
        // if ($token == 'ABCDEFGH') {
            
        //     return $next($request);
        // }
        // return response()->json(['message' => 'Wrong token please provide correct token key'],404);
        // $user = Auth::onceBasic();
        if (Auth::onceBasic()) {
            return response()->json(['message' => 'User Not Autorised!!'],404);
        }
        else {
            return $next($request);
        }
    }
}
