<?php

namespace Jamesborg2012\LaravelExamplePackage\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs_list = [
            [
                'name' => 'Software Developer',
                'salary' => '50000'
            ],
            [
                'name' => 'Teacher',
                'salary' => '20000'
            ]
        ];

        foreach ($jobs_list as $job) {
            DB::table('jobs')->insert([
                'name' => $job['name'],
                'salary' => $job['salary']
            ]);
        }
    }
}
