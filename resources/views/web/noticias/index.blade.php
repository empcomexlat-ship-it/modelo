@extends('layouts.app')

@section('titulo', 'Noticias')

@section('contenido')
    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">

            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'Noticias',
                ])

                <div class="partials_contenedor_grid_post">
                    <div class="grid_noticias">
                        @foreach ($noticias as $noticia)
                            <a href="{{ route('noticias.show', $noticia->slug) }}" class="post_imagen_contenedor">
                                <img src="{{ $noticia->imagen }}" alt="{{ $noticia->titulo }}">
                                <p class="titulo">{{ $noticia->titulo }}</p>
                                <p class="descripcion">{{ Str::limit(strip_tags($noticia->contenido), 100) }}</p>
                                <p class="fecha">{{ $noticia->created_at->format('d M Y') }}</p>
                            </a>
                        @endforeach
                    </div>

                    <div class="paginacion">
                        {{ $noticias->links('vendor.pagination.default') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
