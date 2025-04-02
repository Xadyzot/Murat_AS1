<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Breakfasts']);
        Category::create(['name' => 'Salads']);
        Category::create(['name' => 'Drinks']);
        Category::create(['name' => 'Desserts']);
        Category::create(['name' => 'Soups']);
    }
}
