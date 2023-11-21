<?php

namespace Jamesborg2012\LaravelExamplePackage\Http\Controllers;

use Illuminate\Routing\Controller;
use Jamesborg2012\LaravelExamplePackage\Http\Models\Job;
use Jamesborg2012\LaravelExamplePackage\Http\Models\Person;

class TestController extends Controller
{
    public function index()
    {
        /**
         * @var Person $person
         */
        // $person = Person::find(1);

        // return $person->job->name;

        $people = Job::find(1)->people;
        $names = "";

        /**
         * @var Person $person
         */
        foreach ($people as $person) {
            $names .= $person->name . ', ';
        }

        return $names;
    }
}
