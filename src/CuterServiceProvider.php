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
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__.'/../config/cuter.php' => config_path('cuter.php'),
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
        $this->app->make('Simcript\Cuter\BusinessLogics\VisitorBL');
        $this->app->make('Simcript\Cuter\Models\Link');
        $this->app->make('Simcript\Cuter\Models\Visitor');
    }
}
