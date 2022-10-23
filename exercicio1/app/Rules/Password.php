<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Password implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/[a-z]/', $value)
            && preg_match('/[A-Z]/', $value)
            && preg_match('/[0-9]/', $value)
            && preg_match('/^[\w$@]{8,}$/', $value);
    }

    public function message()
    {
        return 'A senha precisa ter mais de 8 caracteres, contendo pelo menos 1 letra minúscula, 1 letra maiúscula
        e 1 número.';
    }
}
