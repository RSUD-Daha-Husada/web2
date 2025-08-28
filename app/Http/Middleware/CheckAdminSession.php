<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminSession
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
        if (Auth::check()) {
            $user = Auth::user();
            
            // Perbarui session dengan data terkini
            session([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'is_admin' => $user->is_admin ?? false
            ]);
        }
        
        return $next($request);
    }
}