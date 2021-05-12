<input
    class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-100 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
    @isset($name) id="{{ $name }}" @endisset type="{{ $type ?? 'text' }}" @isset($placeholder)
placeholder="{{ $placeholder }}" @endisset />
