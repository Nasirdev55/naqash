<?php

namespace CreateOrdersTable;

use Illuminate\Support\Facades\Facade;

class CreateOrdersTableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return CreateOrdersTable::class;
    }
}
