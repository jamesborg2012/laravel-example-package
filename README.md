# Laravel Example Package
## A sample composer package to be used with Laravel

## Setup

### Step 1 - Include in project

First, you need to update your composer.json to point to the package. Add a repositories section with the below information

```
"repositories": [
        {
            "type": "vcs"
            "url": "https://github.com/jamesborg2012/laravel-example-package"
        }
    ],
```

Run `composer install` to get the package

### Step 2 - Publish Assets

Run `php artisan vendor:publish --tag=public --force` to publish all package assets to your application

### Step 3 - Migrations

Run `php artisan migrate` to create the package tables

### Step 4 - Seeding

Run `php artisan db:seed --class=Jamesborg2012\\LaravelExamplePackage\\Seeders\\CoreSeeder`. This core file will then run all the other seeders
