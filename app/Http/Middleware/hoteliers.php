<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class hoteliers
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
        if( !Session::get('login_hoteliers')) {
            return redirect('hoteliers/login')->with('alert','Anda Harus Login');
        }

        else {
            return $next($request);
        }    }
}
