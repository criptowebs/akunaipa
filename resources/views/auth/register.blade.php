@extends('layouts.app',['title'=>'Registrarme'])

@section('content')

    <form action="{{ route('register') }}" method="POST"
        class="lg:w-1/3 sm:w-full sm:flex-none lg:mx-auto lg:my-32 sm:my-20 rounded-xl p-8 bg-blue-400">
        @csrf
        <div class="lg:flex sm:flex-none lg:space-x-4">
            <x-panel.form.input-label label="Usuario" placeholder="Criptowebs" name="user" />
            <x-panel.form.input-label label="Correo" placeholder="criptowebs@gmail.com" type="email" name="email" />
        </div>
        <div class="lg:flex sm:flex-none lg:space-x-4 pt-2 pb-5">
            <x-panel.form.input-label label="Contraseña" placeholder="******" type="password" name="password" />
            <x-panel.form.input-label label="Confirmar Contraseña" placeholder="******" type="password"
                name="password_confirmation" />
        </div>
        <button class=" py-3 w-full bg-orange-500 hover:bg-orange-600 rounded-lg text-white font-bold"
            type="submit">Registrarme</button>
    </form>

@endsection
