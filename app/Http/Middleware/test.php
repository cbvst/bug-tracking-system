<?php

namespace App\Http\Middleware;

use Closure;

class test
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
        $ip=$request->ip();
        $ip='192.0.0.1';  /* for other ip address other than localhost  */
        if($ip=='::1')   /* by default localhost ip address is '127.0.0.1'  or '::1' */
            return redirect('/');
        return redirect('view2');
    }
}
