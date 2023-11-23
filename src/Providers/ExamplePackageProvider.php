<?php

namespace Jamesborg2012\LaravelExamplePackage\Providers;

use Illuminate\Support\ServiceProvider;

class ExamplePackageProvider extends ServiceProvider
{
    public function boot()
    {
        //From where to read routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        //From where to read migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        //From where to load Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-example-package');

        //Publish assets
        $this->publishes([
            __DIR__ . '/../public' => public_path('jamesborg2012/laravel-example-package')
        ], 'public');

        //Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-example-package')
        ], 'views');
    }
}
