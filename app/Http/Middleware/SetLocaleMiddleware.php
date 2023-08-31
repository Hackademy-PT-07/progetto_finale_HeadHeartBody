<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); 
        $acceptLang = ['es', 'it', 'en'];
        $lang = in_array($lang, $acceptLang) ? $lang : 'en';
        $localeLanguage = session('locale', $lang);
        
        App::setLocale($localeLanguage);

        /* dd($localeLanguage); */
        /* app()->setLocale($request->segment(1)); */


        return $next($request);
    }
}
