<div class="{{ $classInputLabel ?? 'w-full' }}">
    <x-panel.form.label label="{{ $label ?? '' }}" />
    <x-panel.form.input name="{{ $name ?? '' }}" placeholder="{{ $placeholder ?? '' }}"
        autofocus="{{ $autofocus ?? false }}" />
    @isset($name)
        @error($name)
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    @endisset
</div>
