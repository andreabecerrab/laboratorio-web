<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class ValidateRole
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

        if (!Auth::check()) {
            return redirect()->route('auth.register');
        } else{
            if($request->path() == '/' && Auth::check()){
                return $next($request);
            } else if ($request->path() == 'app/dashboard' && Auth::check() && $user->role_id != 1 ){
                return $next($request);
            } else if ($request->path() == 'app/users' && Auth::check() && $user->role_id != 1 && $user->role_id != 2){
                return $next($request);
            } else {
                return abort(403);
            }
        }


        return $next($request);
    }
}
