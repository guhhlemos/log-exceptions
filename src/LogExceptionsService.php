<?php 

namespace Br24\LogExceptions;

use Br24\LogExceptions\Models\ExceptionModel;

class LogExceptionsService {

    /**
     * @param $exception
     * @return void
     */
    public function save($exception)
    {
        $ex = new ExceptionModel();
        $ex->name = $exception->getMessage();
        $ex->file = $exception->getFile();
        $ex->line = $exception->getLine();
        $ex->save();
    }

}