<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class role_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        if(Auth::User()->role->id == $role) {return redirect()->route('dn.store');}
        if(!Auth::User()->role->id == $role) {return redirect()->route('Admin.index');}
        dd(Auth::User()->role);
       // dd($v->can());
        return $next($request);
    }
}
