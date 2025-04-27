<nav class="bg-white border-b border-gray-200 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600">
                    ReserSpot
                </a>
            </div>

            {{-- Links --}}
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
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

            {{-- Login / Logout --}}
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                    <span class="text-gray-700 mr-4">Hola, {{ auth()->user()->name }}</span>
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
        </div>
    </div>
</nav>
