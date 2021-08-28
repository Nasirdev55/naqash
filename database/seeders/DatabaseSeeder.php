<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         UserSeeder::factory(10)->create();
    }
}
