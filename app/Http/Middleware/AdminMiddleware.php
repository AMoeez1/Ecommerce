<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check()){
            return redirect()->route('home')->withErrors(['error' => "Only admins have access to this route!"]);
        }
        if(auth()->user()->is_admin === false){
            return redirect()->route('home')->withErrors(['error' => "Only admins have access to this route!"]);
        }
        return $next($request);
    }
}
