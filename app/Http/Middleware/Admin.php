<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role === 'admin' || Auth::user()->role === 'kepsek')
        {
            return $next($request);
        } else {
            sleep(3);
            return redirect()->back()->with('error', 'Maaf Anda Tidak Memiliki Akses');
        }
    }
}