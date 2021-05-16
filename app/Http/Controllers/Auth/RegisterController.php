<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
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
        ]);
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return User::create([
            'user' => $data['user'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // public function showRegistrationForm()
    // {
    //     return view('auth.register', ['name' => 'example'])->withErrors(request());
    // }
}
