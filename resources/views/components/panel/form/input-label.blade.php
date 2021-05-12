<div class="w-full {{ $classInputLabel ?? '' }}  md:w-1/2 px-3 mb-6 md:mb-0">
    @include('components.panel.form.label')
    @include('components.panel.form.input')
    @error($name)
        <p class="text-red-500 text-xs italic">{{ $error }}</p>
    @enderror
</div>
