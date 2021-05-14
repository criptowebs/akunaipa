@extends('layouts.base-panel')
@section('content')
    <form action="" class="w-full max-w-2xl mx-auto my-32 rounded-xl p-8 bg-blue-400">
        <div class="flex space-x-4">
            <x-panel.form.input-label label="Usuario" placeholder="Criptowebs" name="user" />
            <x-panel.form.input-label label="Correo" placeholder="criptowebs@gmail.com" type="email" name="email" />
        </div>
        <div class="flex space-x-4 pt-2">
            <x-panel.form.input-label label="Contraseña" placeholder="******" type="password" name="password" />
            <x-panel.form.input-label label="Confirmar Contraseña" placeholder="******" type="password"
                name="password_confirmation" />
        </div>
        <div class="w-1/4 mx-auto pt-2">
            <button class="w-full bg-red-500 rounded-lg p-1 py-2 font-bold text-white">Registrarme</button>
        </div>
    </form>
@endsection
