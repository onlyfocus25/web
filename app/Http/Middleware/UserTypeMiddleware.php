<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserTypeMiddleware
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
        $user = Auth::user();

        if ($user) {
            // Redirect based on user type
            switch ($user->user_type) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'diploma':
                    return redirect()->route('diploma.dashboard');
                case 'bachelor':
                    return redirect()->route('bachelor.dashboard');
                case 'master':
                    return redirect()->route('master.dashboard');
                default:
                    return redirect()->route('index'); // Default fallback
            }
        }

        return $next($request);
    }
}
