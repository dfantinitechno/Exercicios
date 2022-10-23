<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Email implements Rule
{

    public function passes($attribute, $value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public function message()
    {
        return 'Utilize o formato "seuemail@seuprovedor.com"';
    }
}
