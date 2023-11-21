<?php

namespace Jamesborg2012\LaravelExamplePackage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jamesborg2012\LaravelExamplePackage\Http\Models\Job;

class JobController extends Controller
{
    public function getJob(int $id)
    {
        /**
         * @var Job $job
         */
        $job = Job::findOrFail($id);

        return "Name: " . $job->name . " with Salary: € " . $job->salary;
    }
}
