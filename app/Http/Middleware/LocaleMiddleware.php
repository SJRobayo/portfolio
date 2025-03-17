<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        // Set Locale in this "Request"
        $locale = $request->session()->get('locale') ?? 'en';
        app()->setLocale($locale);

        return $next($request);
    }
}
