@php
    $p = $p_elemento ?? null;

    $titulo = $p->titulo ?? ($titulo ?? null);
    $titulo_descripcion = $p->titulo_descripcion ?? ($titulo_descripcion ?? null);

    $imagen = asset($p->imagen ?? ($imagen ?? 'assets/imagen/default.jpg'));
    $imagen_seo = $p->imagen_seo ?? ($imagen_seo ?? 'Imagen del bloque');
    $subtitulo = $p->subtitulo ?? ($subtitulo ?? '');
    $subtitulo_descripcion = $p->subtitulo_descripcion ?? ($subtitulo_descripcion ?? '');
    $lista = $p->lista ?? ($lista ?? []);
    $boton = $p->boton ?? ($boton ?? []);
    $boton_icono = $boton['icono'] ?? ($boton_icono ?? 'fa-solid fa-link');
    $boton_link = $boton['link'] ?? ($boton_link ?? '#');
    $boton_texto = $boton['texto'] ?? ($boton_texto ?? 'Leer más');
    $boton_color = $boton['color'] ?? ($boton_color ?? '#007bff');
@endphp

@include('partials.encabezado', [
    'titulo' => $titulo,
    'descripcion' => $titulo_descripcion,
])

<section class="bloque_1">
    <!-- Imagen -->
    <div class="bloque_imagen">
        <img src="{{ $imagen }}" alt="{{ $imagen_seo }}">
    </div>

    <!-- Contenido -->
    <div class="bloque_cuerpo">
        <h3>{!! $subtitulo ?: 'Título por defecto' !!}</h3>
        <p>{!! $subtitulo_descripcion ?: 'Texto descriptivo del bloque.' !!}</p>

        @if (!empty($lista) && is_array($lista))
            <ul>
                @foreach ($lista as $item)
                    <li>
                        @if (!empty($item['icono']))
                            <i class="{{ $item['icono'] }}"></i>
                        @endif
                        {{ $item['texto'] ?? '' }}
                    </li>
                @endforeach
            </ul>
        @endif

        @if (!empty($boton_link) && !empty($boton_texto))
            <a href="{{ $boton_link }}" target="_blank" class="btn-whatsapp"
                style="background-color: {{ $boton_color }};">
                <i class="{{ $boton_icono }}"></i> {{ $boton_texto }}
            </a>
        @endif
    </div>
</section>
