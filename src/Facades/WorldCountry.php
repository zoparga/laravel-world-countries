<?php

namespace zoparga\WorldCountry\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \zoparga\WorldCountry\WorldCountry
 */
class WorldCountry extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'worldcountries';
    }
}
