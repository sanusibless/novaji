<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $authuser = User::where('api_token', $request->bearerToken())->get();

        if (count($authuser) === 0 ) {
            return response()->json([
                        'message' => 'You are not Authorized'
                    ], 403);
        }

        return $next($request);
    }
}
