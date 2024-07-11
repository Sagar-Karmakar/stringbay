<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            ['make' => 'Toyota', 'model' => 'Camry', 'year' => 2020],
            ['make' => 'Honda', 'model' => 'Accord', 'year' => 2021],
            ['make' => 'Zephyr Motors', 'model' => 'Horizon XR7', 'year' => 2005],
            ['make' => 'Vortex Innovations', 'model' => 'Cyclone SX', 'year' => 2021],
            // Add more predefined cars
        ]);
    }
}
