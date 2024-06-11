<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Check if the authenticated user has the 'admin' role
            if (Auth::user()->roles === 'user') {
                return $next($request);
            }
            else{
                abort(403);
            }
        }
        else {
            //redirect to login page
            return redirect()->route('login');
            
        }  
    }
}
