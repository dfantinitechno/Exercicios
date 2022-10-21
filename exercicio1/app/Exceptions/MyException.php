<?php

namespace App\Exceptions;

use Exception;

class MyException extends Exception
{

    public function render($request)
    {
        return response ($request);
    }
}
