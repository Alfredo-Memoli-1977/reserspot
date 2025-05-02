<nav class="bg-white border-b border-gray-200 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 relative">
            {{-- Logo --}}
            <div class="flex items-center flex-shrink-0">
                <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600">
                    ReserSpot
                </a>
            </div>

            {{-- Menú centrado (escritorio/tablet) --}}
            <div class="hidden sm:flex space-x-8 mx-auto items-center">
                <x-nav-link href="{{ url('/inicio') }}" :active="request()->is('inicio')">
                    Inicio
                </x-nav-link>
                <x-nav-link href="{{ url('/reservas') }}" :active="request()->is('reservas')">
                    Reservas
                </x-nav-link>
                <x-nav-link href="{{ url('/contacto') }}" :active="request()->is('contacto')">
                    Contacto
                </x-nav-link>
            </div>

            {{-- Login/Registro a la derecha --}}
            <div class="hidden sm:flex items-center space-x-4">
                @auth
                    <span class="text-gray-700">Hola, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Cerrar sesión</button>
                    </form>
                @else
                    <x-nav-link href="{{ route('login') }}" :active="request()->is('login')">
                        Login
                    </x-nav-link>
                    <x-nav-link href="{{ route('register') }}" :active="request()->is('register')">
                        Registro
                    </x-nav-link>
                @endauth
            </div>

            {{-- Botón hamburguesa (solo móvil) --}}
            <div class="flex sm:hidden">
                <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Menú desplegable móvil --}}
        <div id="mobile-menu" class="hidden sm:hidden mt-2">
            <div class="flex flex-col space-y-2">
                <x-nav-link href="{{ url('/inicio') }}" :active="request()->is('inicio')">
                    Inicio
                </x-nav-link>
                <x-nav-link href="{{ url('/reservas') }}" :active="request()->is('reservas')">
                    Reservas
                </x-nav-link>
                <x-nav-link href="{{ url('/contacto') }}" :active="request()->is('contacto')">
                    Contacto
                </x-nav-link>

                <hr class="border-t border-gray-300 my-2">

                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700 text-left px-3 py-1 text-sm">
                            Cerrar sesión
                        </button>
                    </form>
                @else
                    <x-nav-link href="{{ route('login') }}" :active="request()->is('login')">
                        Login
                    </x-nav-link>
                    <x-nav-link href="{{ route('register') }}" :active="request()->is('register')">
                        Registro
                    </x-nav-link>
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
