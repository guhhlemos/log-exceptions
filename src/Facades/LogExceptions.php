<?php 

namespace Guhhlemos\LogExceptions\Facades;

use Illuminate\Support\Facades\Facade;

class LogExceptions extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LogExceptions';
    }

}
