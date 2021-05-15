@extends('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="POST"
        class="w-1/3 sm:w-full sm:flex-none mx-auto my-32 rounded-xl p-8 bg-blue-400">
        @csrf
        <div class="lg:flex sm:flex-none space-x-4">
            <x-panel.form.input-label label="Usuario" placeholder="Criptowebs" name="user" />
            <x-panel.form.input-label label="Correo" placeholder="criptowebs@gmail.com" type="email" name="email" />
        </div>
        <div class="flex space-x-4 pt-2 pb-5">
            <x-panel.form.input-label label="Contraseña" placeholder="******" type="password" name="password" />
            <x-panel.form.input-label label="Confirmar Contraseña" placeholder="******" type="password"
                name="password_confirmation" />
        </div>

        <button class=" py-3 w-full bg-orange-500 hover:bg-orange-600 rounded-lg text-white font-bold"
            type="submit">Registrarme</button>
    </form>

@endsection
