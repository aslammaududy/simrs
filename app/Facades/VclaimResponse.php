<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Services\Fake\VclaimResponse
 */
class VclaimResponse extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'vclaimResponse';
    }
}
