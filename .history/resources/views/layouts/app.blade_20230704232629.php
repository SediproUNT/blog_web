{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sedipro - @yield('titulo')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class=" container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Sedipro
            </h1>
            @guest
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">
                        Crear cuenta
                    </a>
                </nav>
            @endguest

            @auth
                <nav class="flex gap-2 items-center">
                    <a class="font-bold text-gray-600 text-sm" href="#">
                        Hola:
                        <span class="font-normal">
                            {{ auth()->user()->username }}
                        </span>
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                            Cerrar sesión
                        </button>
                    </form>



                </nav>
            @endauth

        </div>
    </header>

    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')

    </main>

    <footer class="p-5 bg-white shadow-inner mt-10">
        <div class="container mx-auto">
            <p class="text-center text-gray-600 text-sm">
                &copy; Sedipro - Todos los derechos reservados {{ date('Y') }}
            </p>
        </div>
    </footer>

</body>

</html> --}}




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>DevStagram - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class=" container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    DevStagram
                </h1>
                @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">Login</a>
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">
                            Crear cuenta
                        </a>
                    </nav>
                @endguest

                @auth
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold text-gray-600 text-sm" href="#">
                            Hola:
                            <span class="font-normal">
                                 {{ auth()->user()->username }}
                            </span>
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                                Cerrar sesión
                            </button>
                        </form>



                    </nav>
                @endauth

            </div>
        </header>

        <main class="container mx-auto mt-10">

            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')

        </main>

        <footer class="p-5 bg-white shadow-inner mt-10">
            <div class="container mx-auto">
                <p class="text-center text-gray-600 text-sm">
                    &copy; DevStagram - Todos los derechos reservados {{ date('Y') }}
                </p>
            </div>
        </footer>

    </body>
</html>
