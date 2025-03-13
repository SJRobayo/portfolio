<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Si la sesión tiene un valor de 'locale', se establece el idioma de la aplicación
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
        
        return $next($request);
    }
}
