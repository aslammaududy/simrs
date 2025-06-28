<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Services\Vclaim
 */
class Vclaim extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'vclaim';
    }
}
