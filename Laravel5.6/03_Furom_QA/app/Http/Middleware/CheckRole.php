<?php

namespace App\Http\Middleware;

use Closure;
// u need to add this manual this is not automatic in visual studio code 
use  illuminate\Support\Facades\Auth; 

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {   
        if(Auth::check() == false  ||  Auth::user()->admin != true){
            return redirect('/');
        }
      
        return $next($request);
        
        
    }
}
