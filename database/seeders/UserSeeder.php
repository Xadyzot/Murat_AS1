<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Запуск сида.
     *
     * @return void
     */
    public function run()
    {
        User::factory(30)->create();
    }
}
