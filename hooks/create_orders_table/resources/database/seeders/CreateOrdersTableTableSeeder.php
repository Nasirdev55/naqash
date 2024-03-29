<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateOrdersTableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Don't add data if the data is already there
        if (DB::table('create_orders_table')->count() > 0) {
            return;
        }

        DB::table('create_orders_table')->insert([
            ['name' => 'foo'],
            ['name' => 'bar'],
            ['name' => 'baz'],
        ]);
    }
}
