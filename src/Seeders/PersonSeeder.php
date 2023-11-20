<?php

namespace Jamesborg2012\LaravelExamplePackage\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $people_list = [
            [
                'name' => 'James',
                'age' => '27'
            ],
            [
                'name' => 'Thomas',
                'age' => '21'
            ]
        ];

        foreach ($people_list as $person) {
            DB::table('people')->insert([
                'name' => $person['name'],
                'age' => $person['age']
            ]);
        }
    }
}
