<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create(['name' => 'Ashabad']);
        City::create(['name' => 'Mary']);
        City::create(['name' => 'Anew']);
        City::create(['name' => 'Tedjen']);
        City::create(['name' => 'Arkadag']);
    }
}
