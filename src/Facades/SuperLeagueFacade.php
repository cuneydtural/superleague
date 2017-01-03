<?php

namespace Tural\SuperLeague\Facades;

use Illuminate\Support\Facades\Facade;


class SuperLeagueFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'superleague';
    }
}