<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->rol_id == '1' || auth()->user()->rol_id == '2' || auth()->user()->rol_id == '3') {
            return $next($request);
        }else{
            return redirect('/empresa');
        }
    }
}