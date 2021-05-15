<input
    class="appearance-none block w-full bg-gray-50 text-gray-700 border  border-gray-100 rounded py-2 px-4 mb-1 leading-tight focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent"
    @isset($name) id="{{ $name }}" @endisset type="{{ $type ?? 'text' }}" @isset($placeholder)
    placeholder="{{ $placeholder }}" @endisset @if ($autofocus) autofocus @endif value="{{ $value ?? old($name) }}" />
