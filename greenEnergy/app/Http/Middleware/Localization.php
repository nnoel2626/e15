<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Localization
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
        if ( \Session::has('locale')) {
             \App::setLocale(\Session::get('locale'));
        }

        // app()->setLocale( Session::get('language', Config::get('app.locale')));

        return $next($request);

    }
}
