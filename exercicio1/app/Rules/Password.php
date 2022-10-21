<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Password implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/[a-z]/', $value)
            && preg_match('/[A-Z]/', $value)
            && preg_match('/[0-9]/', $value)
            && preg_match('/^[\w$@]{8,}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A senha precisa ter mais de 8 caracteres, contendo pelo menos 1 letra minúscula, 1 letra maiúscula
        e 1 número.';
    }
}
