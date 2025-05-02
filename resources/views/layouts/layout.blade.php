<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ReserSpot')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    {{-- Barra de navegación --}}
    @include('components.nav')

    {{-- Contenido dinámico de cada página --}}
    <main class="flex-grow container mx-auto px-4 py-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-800 text-white text-center px-1 py-4">
        <p>ReserSpot &copy; {{ date('Y') }} - Todos los derechos reservados.</p>
    </footer>

</body>
</html>
