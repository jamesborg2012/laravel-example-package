<?php

use Illuminate\Support\Facades\Route;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\TestController;

Route::get('test-package/controller', [TestController::class, 'index']);
