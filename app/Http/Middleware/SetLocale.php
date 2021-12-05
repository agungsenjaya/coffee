<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
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

        $locale = 'en'; // set en as the fallback locale
        if ($request->is('/id/*')) { // if the route starts with /id/* set locale to id
            $locale = 'id';
        } else if ($request->is('/jp/*')) { // if the route starts with /jp/* set locale to jp
            $locale = 'jp';
        }

        //set the derived locale
        App::setLocale($locale);
        
        return $next($request);
    }
}
