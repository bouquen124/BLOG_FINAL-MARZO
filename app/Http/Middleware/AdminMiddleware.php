<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if (!auth()->guest() && (auth()->user()->rol_id==1 || auth()->user()->rol_id==2)){
            return $next($request);


        }
      
    return redirect('/');
    }
}
