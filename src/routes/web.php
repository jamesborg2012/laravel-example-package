<?php

use Illuminate\Support\Facades\Route;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\JobController;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\PersonController;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\TestController;

Route::get('test-package/controller', [TestController::class, 'index']);

Route::get('laravel-example-package/person/{id}', [PersonController::class, 'getPerson']);
Route::get('laravel-example-package/job/{id}', [JobController::class, 'getJob']);
