<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tips - @yield('title')</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            {{-- Botón de controles en el responsive --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Alineación botón a la izquierda logo a la derecha --}}
            <a href="{{ route('commons.home') }}" class="navbar-brand">MHenriquez</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    {{-- Compara la ruta actual con un patrón --}}
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('commons.home') }}">Home</a>
                    </li>

                    <li class="nav-item {{ request()->is('nosotros') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('commons.about') }}">Nosotros</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
            @yield('content')

            <hr>

            <p>
                {{-- Retorna la ruta actual --}}
                La ruta es: {{ request()->path() }}
            </p>

            <p>
                La ruta completa es: {{ request()->url() }}
            </p>
        </div>
    </body>
</html>
