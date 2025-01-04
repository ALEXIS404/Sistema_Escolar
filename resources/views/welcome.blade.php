<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-white dark:bg-gray-800 shadow-md">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-gray-800 dark:text-gray-100">Colegio</a>
                <div>
                    @auth
                        <span class="text-gray-600 dark:text-gray-400">Hola, {{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                           class="ml-4 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ route('logo ut') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @else
                        @endauth
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="flex-grow flex items-center justify-center bg-gray-100 dark:bg-gray-900">
            <div class="text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    Bienvenido al Sistema Escolar
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                    Administra fácilmente el registro de estudiantes, docentes y más.
                </p>
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg text-lg font-semibold">
                        Ir al Inicio
                    </a>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-semibold">
                        Iniciar Sesión
                    </a>
                    <a href="{{ route('register') }}" class="ml-4 bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg text-lg font-semibold">
                        Registrarse
                    </a>
                @endauth
            </div>
        </header>

        <!-- Footer -->
        <footer class="bg-gray-200 dark:bg-gray-800 py-4">
            <div class="container mx-auto text-center text-gray-600 dark:text-gray-400 text-sm">
                © {{ date('Y') }} Colegio. Todos los derechos reservados.
            </div>
        </footer>
    </div>
</body>
</html>
