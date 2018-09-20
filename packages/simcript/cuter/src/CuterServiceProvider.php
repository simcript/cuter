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
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        // $this->loadTranslationsFrom(__DIR__.'/path/to/translations', 'courier');
        // $this->publishes([
        //     __DIR__.'/path/to/translations' => resource_path('lang/vendor/courier'),
        // ]);
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
