<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class EnsureTramiteFlow
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle(Request $request, Closure $next)
    {
        if (!session()->has('valorada_id')) {
            return redirect()->route('tramite.valorada.form');
        }

        if (!session()->has('solicitud_id')) {
            return redirect()->route('tramite.solicitud.create');
        }

       
   /*  if (!session()->has('otp_verified')) {
        return redirect()->route('tramite.otp.form');
    }
    */

    return $next($request);
}
}
