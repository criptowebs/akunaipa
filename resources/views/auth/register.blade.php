@extends('layouts.app')

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

    <div class="w-full flex content-center">
        <div class="w-1/3"></div>
        <form class="m-6 w-1/3 flex bg-red-600 flex-wrap" method="POST" action="{{ route('register') }}">
            @csrf
            <x-panel.form.input-label name="email" label="correo" />
            <x-panel.form.input-label name="password" label="contraseña" />
            <x-panel.form.input-label name="password_confirmation" label="confirmar contraseña" />
            {{-- <div class="w-1/3"></div> --}}
            <div class="w-1/3"></div>
            <button class="w-full w-1/3 flex items-center justify-center rounded-md border border-gray-300"
                type="submit">Registrarme</button>

        </form>
    </div>
@endsection
