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
            ['make' => 'Maruti Suzuki', 'model' => 'Swift', 'year' => 2005],
            ['make' => 'Hyundai', 'model' => 'Creta', 'year' => 2015],
            ['make' => 'Tata Motors', 'model' => 'Nexon', 'year' => 2017],
            ['make' => 'Kia', 'model' => 'Seltos', 'year' => 2019],
            ['make' => 'Mahindra', 'model' => 'XUV300', 'year' => 2019],
            ['make' => 'Toyota', 'model' => 'Fortuner', 'year' => 2009],
            ['make' => 'Honda', 'model' => 'City', 'year' => 1998],
            ['make' => 'Volkswagen', 'model' => 'Polo', 'year' => 2010],
            ['make' => 'Renault', 'model' => 'Kwid', 'year' => 2015],
            ['make' => 'Mahindra', 'model' => 'Scorpio-N', 'year' => 2022],
            ['make' => 'Ford', 'model' => 'Mustang', 'year' => 1964],
            ['make' => 'BMW', 'model' => '3 Series', 'year' => 1975],
            // Add more predefined cars
        ]);
    }
}
