@extends('layouts.base-panel')
@section('content')
    <div class="flex content-center flex-wrap ">
        <div class="w-1/3"></div>
        <form class="w-1/3">
            <div class="flex flex-wrap -mx-3 mb-6">
                <x-panel.form.input-label  label="Nombre" placeholder="Criptowebs"
                    type="email" name="name" />
                <x-panel.form.input-label label="Contraseña" placeholder="******" type="password" name="password" />
            </div>
        </form>
    </div>
@endsection
