<div class="w-full {{ $classInputLabel ?? '' }}  px-3 mb-6 md:mb-0">
    @include('components.panel.form.label')
    @include('components.panel.form.input')
    @isset($name)
        @error($name)
            <p class="text-red-500 text-xs italic">{{ $error }}</p>
        @enderror
    @endisset
</div>
