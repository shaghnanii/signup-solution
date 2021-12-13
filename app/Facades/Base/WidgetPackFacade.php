<?php

namespace App\Facades\Base;

use Illuminate\Support\Facades\Facade;

class WidgetPackFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'packs';
    }
}
