<?php

namespace DraftsmanDev\DraftsmanDevLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DraftsmanDev\DraftsmanDevLaravel\DraftsmanDevLaravel
 */
class DraftsmanDevLaravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \DraftsmanDev\DraftsmanDevLaravel\DraftsmanDevLaravel::class;
    }
}
