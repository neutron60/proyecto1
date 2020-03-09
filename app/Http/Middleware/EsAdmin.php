<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;



class EsAdmin
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

        if(Auth::check()){

            $user=Auth::user();
            if($user->esAdmin()){

                return redirect("/layouts");

            }
            else{ return redirect("/");}

        }

        if(!Auth::check()){
           return redirect("/");
        }

        return $next($request);
    }
}
