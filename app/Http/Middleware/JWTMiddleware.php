<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            JWTAuth::parseToken()->authenticate();
            return $next($request);
        } catch (JWTException $error) {
            if ($error instanceof TokenInvalidException) {
                return response()->json(['errors' => "Token inválido"], 498);
            }

            if ($error instanceof TokenExpiredException) {
                return response()->json(['errors' => "Token expirado"], 401);
            }

            return response()->json(['errors' => "Token inválido"], 401);
        }
    }
}
