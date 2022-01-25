<?php

namespace Lianmaymesi\Wireblade\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lianmaymesi\Wireblade\Wireblade
 */
class Wireblade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wireblade';
    }
}
