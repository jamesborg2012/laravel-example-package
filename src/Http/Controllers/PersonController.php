<?php

namespace Jamesborg2012\LaravelExamplePackage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jamesborg2012\LaravelExamplePackage\Http\Models\Person;

class PersonController extends Controller
{
    public function getPerson(int $id)
    {
        $person = Person::findOrFail($id);

        return $person->name . " age " . $person->age;
    }
}
