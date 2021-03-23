<?php 

namespace Guhhlemos\LogExceptions;

use Guhhlemos\LogExceptions\Models\LogExceptionsModel;

class LogExceptions {

    /**
     * @param $exception
     * @return void
     */
    public static function save($exception)
    {
        $ex = new LogExceptionsModel();
        $ex->name = $exception->getMessage();
        $ex->file = $exception->getFile();
        $ex->line = $exception->getLine();
        $ex->save();
    }

}