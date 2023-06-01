<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'email|unique:users,email',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo de nome não pode ser vazio',
            'email.email' => 'O formato do campo de email está inválido',
            'email.unique' => 'O email informado já está vinculado a outra conta',
            'password.required' => 'O campo de senha não pode ser vazio',
            'password.min' => 'O campo de senha precisa ter no mínimo 8 letras'
        ];
    }
}
