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

        //Publish assets
        $this->publishes([
            __DIR__ . '/../public' => public_path('jamesborg2012/laravel-example-package')
        ], 'public');
    }
}
