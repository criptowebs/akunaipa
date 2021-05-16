@extends('layouts.app',['title'=>'Entrar'])
@section('content')

    <form action="{{ route('login') }}" method="POST" class="my-20 p-8  w-1/3 mx-auto bg-blue-500 rounded-lg">
        @csrf
        <x-panel.form.input-label autofocus label="Correo" placeholder="Criptowebs@gmail.com" name="email" />
        <x-panel.form.input-label label="Contraseña" placeholder="******" name="password" />

        <div class="text-gray-700 mb-3">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Recordar sessión') }}
            </label>
        </div>

        <button class="py-3 w-full bg-orange-500 hover:bg-orange-600 rounded-lg text-white font-bold"
            type="submit">Entrar</button>

        <div class="w-full content-center text-center my-3 text-gray-700">
            @if (Route::has('password.request'))
                <a class="w-full hover:font-bold hover:text-white" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>
    </form>

@endsection
