<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');

            $this->app['router']->pushMiddlewareToGroup('web', function ($request, $next) {
                $host = $request->getHost();

                if (!str_starts_with($host, 'www.')) {
                    $newUrl = 'https://www.' . ltrim($host, 'www.') . $request->getRequestUri();
                    return Redirect::to($newUrl, 301);
                }

                return $next($request);
            });
        }
    }

    // public function boot()
    // {
    //     if ($this->app->environment('production')) {
    //         URL::forceScheme('https');
    //     }
    // }
}
