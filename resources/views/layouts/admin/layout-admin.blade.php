<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('descripcion')">

    <title>@yield('titulo', 'Candidato')</title>

    <!-- Estilos generales -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SCRIPTS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Librería Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- STYLES -->
    @livewireStyles
</head>

<body>

    <div x-data="xDataLayout()" x-init="initLayout" x-cloak class="contenedor_layout_general">

        <!--MENU PRINCIPAL-->
        @include('layouts.admin.menu.menu-principal')

        <!--CONTENEDOR LAYOUT PAGINA-->
        <div class="contenedor_layout_pagina" :class="{ 'estilo_contenedor_layout_pagina': estadoNavAbierto }">
            <!--HEADER LAYOUT PAGINA-->
            @livewire('admin.header.componente-header-livewire')

            <!--CONTENIDO LAYOUT PAGINA-->
            <div class="contenido_layout_pagina">
                <div class="centrar_pagina" @hasSection('anchoPantalla')
                    style="max-width: @yield('anchoPantalla')"
                    @endif">
                    <main class="g_contenido_pagina">
                        @yield('content')
                        @if (isset($slot))
                            {{ $slot }}
                        @endif
                    </main>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
