<?php

namespace Jamesborg2012\LaravelExamplePackage\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://randomuser.me/api/?nat=gb&results=10');
        $body = $response->object()->results;

        foreach ($body as $person) {
            $name = $person->name->first . ' ' . $person->name->last;
            $age = $person->dob->age;

            DB::table('people')->insert([
                'name' => $name,
                'age' => $age
            ]);
        }
    }
}
