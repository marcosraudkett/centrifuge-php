<?php

namespace Mvrc\CentrifugePhp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mvrc\CentrifugePhp\CentrifugePhp
 */
class CentrifugePhp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mvrc\CentrifugePhp\CentrifugePhp::class;
    }
}
