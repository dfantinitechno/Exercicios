<?php

namespace App\Http\Requests;

use App\Rules\Email;
use App\Rules\FullName;
use App\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', new FullName],
            'userName' => ['required','min:6'],
            'zipCode' => ['required', 'numeric', 'digits:8'],
            'email' => ['required', new Email],
            'password' => ['required', new Password],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'userName.required' => 'O campo nome de usuário é obrigatório.',
            'userName.min' => 'O campo nome de usuário precisa ter no mínimo 6 caracteres.',
            'zipCode.required' => 'O campo CEP é obrigatório.',
            'zipCode.formato_cep' => 'O campo CEP não possui um formato válido de CEP.',
            'zipCode.numeric' => 'O campo CEP precisa ser um número.',
            'zipCode.digits' => 'o CEP precisa ter 8 números.',
            'email.required' => 'O campo email é obrigatório.',
            'password.required' => 'O campo senha é obrigatório.'
        ];
    }
}
