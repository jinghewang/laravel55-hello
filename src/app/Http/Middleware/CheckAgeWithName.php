<?php

namespace App\Http\Middleware;

use Closure;

class CheckAgeWithName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,string $name)
    {
        if ($request->age <= 200) {

            var_dump($name);die;

            //return redirect('home');
        }

        return $next($request);
    }
}
