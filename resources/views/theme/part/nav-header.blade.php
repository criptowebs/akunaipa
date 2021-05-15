<nav class="flex items-center justify-between flex-wrap bg-teal p-6">
    <div class="flex items-center flex-no-shrink text-white mr-6">
        <img class="h-8 w-200 mr-2" height="54" src="{{ asset('storage/images/system/logo-akunaipa.png') }}"
            alt="logo akunaipa">
        <span class="font-semibold text-xl tracking-tight">Akunaipa</span>
    </div>
    <div class="block lg:hidden">
        <button
            class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
            <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <x-link.nav text="Inicio" to="{{ route('login') }}" />
            <x-link.nav text="Nosotros" to="{{ route('login') }}" />
            <x-link.nav text="Experiencias" to="{{ route('login') }}" />
            <x-link.nav text="Contacto" to="{{ route('login') }}" />
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <x-link.nav text="Entrar" to="{{ route('login') }}" />
                @endif
                @if (Route::has('register'))
                    <x-link.nav text="Registrarme" to="{{ route('register') }}" />
                @endif
            @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                                                                                                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest

        </div>
        <div>
            <a href="#"
                class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">Download</a>
        </div>
    </div>
</nav>
