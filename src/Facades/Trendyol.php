<?php

namespace BahriCanli\Trendyol\Facades;

use Illuminate\Support\Facades\Facade;

class Trendyol extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'trendyol';
    }
}