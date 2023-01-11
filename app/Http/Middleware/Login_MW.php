<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Login_MW
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
        if($request->id<100){
            return view('manager.show_bus')
        }


        return $next($request);
    }
}
