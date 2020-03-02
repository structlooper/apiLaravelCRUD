<?php

namespace App\Http\Middleware;
use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

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
        // $generatedToken = JWTAuth::getToken();
        // return $next($request);

        // $token = $request->header('token');
        // if ($token == $generatedToken) {
            
        //     return response()->json(['error' => 'You are not authrorised user'],404);
        // }
        return $next($request);
        // return response()->json(['message' => 'Wrong token please provide correct token key'],404);
        // $user = Auth::onceBasic();
        // if (Auth::onceBasic()) {
        //     return response()->json(['message' => 'User Not Autorised!!'],404);
        // }
        // else {
            // return $next($request);
        // }
        
    }
   
}
