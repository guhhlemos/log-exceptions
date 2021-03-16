<?php

namespace Br24\LogExceptions\Models;

use Illuminate\Database\Eloquent\Model;

class ExceptionModel extends Model {

    /**
     * Nome da tabela.
     *
     * @var string
     */
    protected $table = 'exceptions';

    const UPDATED_AT = null;
}
