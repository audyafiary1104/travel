<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class agent
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
        if( !Session::get('login_agent')) {
            return redirect('agent/login')->with('alert','Anda Harus Login');
        }

        else {
            return $next($request);
        }    
    }
}
