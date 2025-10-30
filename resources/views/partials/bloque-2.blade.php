@php
    $p = $p_elemento ?? null;

    $titulo = $p->titulo ?? ($titulo ?? null);
    $titulo_descripcion = $p->titulo_descripcion ?? ($titulo_descripcion ?? null);

    $lista = $p->lista ?? ($lista ?? []);
@endphp

@include('partials.encabezado', [
    'titulo' => $titulo,
    'descripcion' => $titulo_descripcion,
])

@if (!empty($lista) && is_array($lista))
    <section class="bloque_2">
        @foreach ($lista as $item)
            <div class="card">
                <h3>{{ $item['titulo'] }}</h3>

                <img src="{{ $item['imagen'] }}">

                <!--<div class="contenido">
                    <p>ga</p>
                </div>-->
            </div>
        @endforeach
    </section>
@endif
