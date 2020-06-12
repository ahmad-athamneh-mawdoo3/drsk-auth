<?php
namespace mawdoo3\drsk\auth;

use Illuminate\Support\ServiceProvider;
use mawdoo3\test\AuthInstall;

class DrskAuthServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        // $this->loadViewsFrom(__DIR__ . '/Views', 'task');
        // $this->loadMigrationsFrom(__DIR__ . '/Migration');
        if ($this->app->runningInConsole()) {
            $this->commands([AuthInstall::class]);
        }

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
