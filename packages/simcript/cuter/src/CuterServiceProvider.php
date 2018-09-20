<?php

namespace Simcript\Cuter;

use Illuminate\Support\ServiceProvider;

class CuterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Simcript\Cuter\LinkCtrl');
    }
}
