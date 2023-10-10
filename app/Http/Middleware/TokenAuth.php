<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenAuth
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');

        $token = str_replace('Bearer ', '', $token);
        // Check if a token is provided in the request headers
        if (!$token) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Check if the token exists in the database
        $user = \App\Models\User::where('api_token', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Log in the user if the token is valid
        Auth::login($user);

        return $next($request);
    }
}
