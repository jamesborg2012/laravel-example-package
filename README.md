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

Then in require you need to add the below:

`"jamesborg2012/laravel-example-package": "dev-master"`

Finally run `composer install` to get the package. In case you get an error, run `composer update` instead.

### Step 2 - Publish Assets

Run `php artisan vendor:publish --tag=public --force` to publish all package assets to your application

### Step 3 - Migrations

Run `php artisan migrate` to create the package tables

### Step 4 - Seeding

Run `php artisan db:seed --class=Jamesborg2012\\LaravelExamplePackage\\Seeders\\CoreSeeder`. This core file will then run all the other seeders

## Customisation

It is possible to override the asset and view files of this package. CSS files can be found in `public/jamesborg2012/laravel-example-package`.

To override view files, first you need to publish them

`php artisan vendor:publish --tag=views --force`

Once published the view files will be found under `resources/views/vendor/laravel-example-package`.

## Description

The purpose of this package was to test how to create a simple custom Laravel package from scratch. The package is able to

- Create tables using migrations
- Seed the tables from APIs and from local JSON files
- Render the data through a Route using a View
- Publish the assets and views for further customisation
