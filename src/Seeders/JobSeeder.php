<?php

namespace Jamesborg2012\LaravelExamplePackage\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = json_decode(File::get(base_path('public\jamesborg2012\laravel-example-package\jobs.json')), true);

        foreach ($jobs as $job) {
            $salary = rand(20000, 100000);

            DB::table('jobs')->insert([
                'name' => $job['name'],
                'salary' => $salary
            ]);
        }
    }
}
