<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLevel
{
    public function handle(request $request, Closure $next, ...$levels)
    {
        if (in_array($request->user()->role_id,$levels)){
            return $next($request);
        }
        else {
            return redirect('login');
        }
    }
}