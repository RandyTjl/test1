<?php

namespace Tjl\Test;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->setupRoutes($this->app->router);
        $this->loadViewsFrom(__DIR__ . '/views', 'test'); // 视图目录指定
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/test'),  // 发布视图目录到resources 下
            __DIR__.'/config/test.php' => config_path('test1.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('test',function($app){
            return new Test;
        });
    }

    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Tjl\Test'], function($router)
        {
            require __DIR__.'/routes.php';
        });
    }
}
