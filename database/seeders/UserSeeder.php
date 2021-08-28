<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
//            'category_id' => '3',
            'color_name' => 'yellow',
//            'name' => Str::random(10),
//            'price' =>  '2500',
            'description' => Str::random(6),
        ]);
    }
}
