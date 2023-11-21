<?php

namespace Jamesborg2012\LaravelExamplePackage\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://randomuser.me/api/?nat=gb&results=10');
        $body = $response->object()->results;

        $jobs = json_decode(File::get(base_path('public\jamesborg2012\laravel-example-package\jobs.json')), true);
        $jobs_count = count($jobs);

        foreach ($body as $person) {
            $name = $person->name->first . ' ' . $person->name->last;
            $age = $person->dob->age;
            $rand_job_id = rand(1, ($jobs_count));

            DB::table('people')->insert([
                'name' => $name,
                'age' => $age,
                'job_id' => $rand_job_id,
            ]);
        }
    }
}
