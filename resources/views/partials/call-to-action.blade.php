@php
    $p = $p_elemento ?? null;

    $titulo = $p->titulo ?? ($titulo ?? null);

    $imagen = asset($p->imagen ?? ($imagen ?? 'assets/imagen/default.jpg'));
    $imagen_seo = $p->imagen_seo ?? ($imagen_seo ?? 'Imagen del bloque');
    $subtitulo = $p->subtitulo ?? ($subtitulo ?? '');
    $boton = $p->boton ?? ($boton ?? []);
    $boton_icono = $boton['icono'] ?? ($boton_icono ?? 'fa-solid fa-link');
    $boton_link = $boton['link'] ?? ($boton_link ?? '#');
    $boton_texto = $boton['texto'] ?? ($boton_texto ?? 'Leer más');
    $boton_color = $boton['color'] ?? ($boton_color ?? '#007bff');
@endphp

<div class="contenedor_call_to_action">
    <img class="imagen" src="{{ asset($imagen) }}" alt="{{ $titulo }}">

    <div class="cuerpo">
        <div class="g_centrar_pagina" @if (!empty($align)) style="text-align: {{ $align }};" @endif>
            <h2>{{ $titulo }}</h2>
            <p>{{ $subtitulo }}</p>
            @if (!empty($negrita))
                <p><strong>{{ $negrita }}</strong></p>
            @endif
            @if (!empty($boton_link) && !empty($boton))
                <a class="boton" href="{{ url($boton_link) }}">{{ $boton_texto }}</a>
            @endif
        </div>
    </div>
</div>
