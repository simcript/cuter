<?php namespace Simcript\Cuter;

/**
 * Created by AliA_MehR <alia_mehr@yahoo.com>
 * Date: Friday - 2018 21 September 15:30:12
 * Description: ServiceProvider cuter laravel package.
 */

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
        $this->publishes([
            __DIR__.'/cuter.php' => config_path('cuter.php'),
        //     __DIR__.'/path/to/translations' => resource_path('lang/vendor/courier'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes.php');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Simcript\Cuter\Controllers\CuterCtrl');
        $this->app->make('Simcript\Cuter\Controllers\LinkCtrl');
        $this->app->make('Simcript\Cuter\BusinessLogics\LinkBL');
        $this->app->make('Simcript\Cuter\Models\Link');
    }
}
