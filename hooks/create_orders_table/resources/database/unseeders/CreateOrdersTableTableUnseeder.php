<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTableTableUnseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Skip if table does not exists.
        if (!Schema::hasTable('create_orders_table')) {
            return;
        }

        DB::table('create_orders_table')
            ->whereIn('name', ['foo', 'bar', 'baz'])
            ->delete();
    }
}
