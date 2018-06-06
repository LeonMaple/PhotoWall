<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        var_dump($next);
        var_dump($request->input('age'));
        if($request->input('age')<18)
            return redirect()->route('refuse');
        return $next($request);
    }

    public function acb()
    {
        var_dump(
        1111111111);
//        return view('welcome');
    }
}
