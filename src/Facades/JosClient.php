<?php
namespace GengYun\JosClient\Facades;

use Illuminate\Support\Facades\Facade;

class JosClient extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'josclient';
    }
}