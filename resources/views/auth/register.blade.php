@extends('layouts.app')

@section('content')
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
