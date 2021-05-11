<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

use Session;
use Config;

class SetLocale
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
        if ($request->has('language')) {
            $cookie = cookie('language', $request->get('language'), 43200);
            App::setLocale($request->get('language'));
            return redirect()->back()->cookie($cookie);
        }
        if ($request->cookie('language') == 'uz') {
            App::setLocale('uz');
        } else if ($request->cookie('language') == 'ru') {
            App::setLocale('ru');
        } else if ($request->cookie('language') == 'en') {
            App::setLocale('en');
        } else if (!$request->cookie('language')) {
            App::setLocale('uz');
        }
        return $next($request);
    }
}
