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
        }

        // if ($this->app->environment('production')) {
        //     URL::forceScheme('https');

        //     $this->app['request']->server->set('HTTPS', true);
        //     if (!str_starts_with(request()->getHost(), 'www')) {
        //         $this->app['request']->server->set('HTTP_HOST', 'www.shipa1.com');
        //     }

        //     $this->app['router']->pushMiddlewareToGroup('web', function ($request, $next) {
        //         if (!str_starts_with($request->getHost(), 'www')) {
        //             return Redirect::secure('www.' . $request->getHost() . $request->getRequestUri());
        //         }
        //         return $next($request);
        //     });
        // }
    }
}
