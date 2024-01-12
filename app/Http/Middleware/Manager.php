<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class Manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redireact('/login');
        }
            
        $user = Auth::user();
        if($user->role==1){
            return redireact('/superadmin');
        }
        if($user->role==2){
            return $next($request);
        }
        if($user->role==3){
            return redireact('/leaddeveloper');
        }
        if($user->role==4){
            return redireact('/developer');
        }
        if($user->role==5){
            return redireact('/owner');
        }
    }
}
