<?php

namespace Freefzl\Fzl;

use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/../public/assets' => public_path('vendor/freefzl/fzl/assets'),
        ], 'fzl_assets');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->loadViewsFrom(__DIR__.'/Views', 'freefzl');
    }
}
