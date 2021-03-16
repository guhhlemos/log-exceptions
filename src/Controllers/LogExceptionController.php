<?php

namespace Br24\LogExceptions\Controllers;

use App\Http\Controllers\Controller;
use Br24\LogExceptions\Models\ExceptionModel;

class LogExceptionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function greeting($exception)
    {
        // return 'Hi, this is your awesome package!!';

        $ex = new ExceptionModel;
        $ex->name = $exception->getMessage();
        $ex->file = $exception->getFile();
        $ex->line = $exception->getLine();
        $ex->save();
        
        // $em = ExceptionModel::all();

        // dd($em->toArray());
    }
}