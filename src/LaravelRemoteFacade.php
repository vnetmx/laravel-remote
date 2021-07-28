<?php

namespace Axgot\LaravelRemote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Axgot\LaravelRemote\LaravelRemote
 */
class LaravelRemoteFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}
