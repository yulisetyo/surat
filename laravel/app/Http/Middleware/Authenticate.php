<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
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
			
		$is_logged_in = \Session::get('is_logged_in');
		
		if( !isset($is_logged_in) || $is_logged_in != true ) {
			return redirect('/login');
		} else {
			return redirect('/home');
		}
			
        return $next($request);
    }
}
