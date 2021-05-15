<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            [
                'user' => 'string|required|max:255|min:3|unique:users,user',
                'email' => 'unique:users,email|email|required',
                'password' => 'required|string|min:8|confirmed',
            ]
        ];
    }

    public function messages()
    {
        return [
            'user.string' => 'El usuario no puede ser numerico.',
            'user.required' => 'El Usuario es requerido.',
            'user.max' => 'Haz superado el numero maximo de caracteres.',
            'user.min' => 'El nombr de usuario debe de tener minimo 3 letras.',
            'user.unique' => 'El usuario ingresado ya se encuentra en uso.',
            'email.unique' => 'El email ingresado ya se encuentra en uso.',
            'email.string' => 'Email no valido',
            'email.required' => 'El Correo es requerido',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'La contraseña debe de tener minimo 3 caracteres.',
            'password.confirm' => 'Confirmacio de contraseña requerida'
        ];
    }
}
