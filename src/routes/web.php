<?php

use Illuminate\Support\Facades\Route;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\JobController;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\PersonController;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\TestController;
use Jamesborg2012\LaravelExamplePackage\Http\Models\Job;

Route::get('test-package/controller', [TestController::class, 'index']);

Route::get('laravel-example-package/person/{id}', [PersonController::class, 'getPerson']);
Route::get('laravel-example-package/job/{id}', [JobController::class, 'getJob']);

Route::get('laravel-example-package/dashboard', function () {

    $jobs = Job::all('id', 'name', 'salary');

    $view_data = [];

    /**
     * @var Job $job
     */
    foreach ($jobs as $job) {
        $loop_data = [
            'name' => $job->name,
            'salary' => $job->salary,
            'people' => []
        ];

        $people = $job->people;

        /**
         * @var Person $person
         */
        foreach ($people as $person) {
            $loop_data['people'][$person->id] = [
                'name' => $person->name,
                'age' => $person->age
            ];
        }

        $view_data[$job->id] = $loop_data;
    }

    return view('jamesborg2012::dashboard', ['table' => $view_data]);
});
