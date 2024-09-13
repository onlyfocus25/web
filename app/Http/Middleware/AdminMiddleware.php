<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if (Auth::check() && Auth::user()->admin) {
            return $next($request);  // Allow access to the next middleware or controller
        }

        // Redirect to home or login if the user is not an admin
        return redirect()->route('home')->withErrors(['error' => 'Unauthorized access']);
    }
}
