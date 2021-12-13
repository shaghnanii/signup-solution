<?php

namespace App\Providers;

use App\Facades\WidgetPackFacade;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class WidgetPackServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('packs', function (Container $app){
            return new WidgetPackFacade();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
