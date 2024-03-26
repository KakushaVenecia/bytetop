<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if ($request->user()) {
            // Check if the user is an admin
            if ($request->user()->role === 'admin') {
                return $next($request);
            }
            // Check if the user is a super admin
            elseif ($request->user()->role === 'super_admin') {
                // Redirect super admin to the dashboard
                return redirect()->route('dashboard');
            }
        }

        // Redirect other users to the home page or display an unauthorized message
        return redirect('/')->with('error', 'Unauthorized access.');
    }
}
