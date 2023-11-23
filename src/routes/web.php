<?php

use Illuminate\Support\Facades\Route;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\JobController;
use Jamesborg2012\LaravelExamplePackage\Http\Controllers\PersonController;
use Jamesborg2012\LaravelExamplePackage\Http\Models\Job;

Route::get('laravel-example-package/person/{id}', [PersonController::class, 'getPerson']);
Route::get('laravel-example-package/job/{id}', [JobController::class, 'getJob']);

/**
 * Returns a simple dashboard showing the data seeded
 */
Route::get('laravel-example-package/dashboard', function () {

    //Getting all jobs
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

        //Get the people associated with the job through Model
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

    return view('laravel-example-package::dashboard', ['table' => $view_data]);
});
