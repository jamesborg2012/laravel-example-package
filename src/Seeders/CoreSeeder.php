<?php

namespace Jamesborg2012\LaravelExamplePackage\Seeders;

use Illuminate\Database\Seeder;

/**
 * This class is responsible with running all other seeders
 */
class CoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Add all other seeders
        $this->call([
            JobSeeder::class,
            PersonSeeder::class
        ]);
    }
}
