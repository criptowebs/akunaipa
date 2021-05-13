<div class="{{ $classInputLabel ?? '' }} w-1/2">
    <x-panel.form.label label="{{ $label ?? '' }}" />
    <x-panel.form.input name="{{ $name ?? '' }}" placeholder="{{ $placeholder ?? '' }}"
        value="{{ $value ?? '' }}" />
    @isset($name)
        @error($name)
            <p class="text-red-500 text-xs italic">{{ $error }}</p>
        @enderror
    @endisset
</div>
