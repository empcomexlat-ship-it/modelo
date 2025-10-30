<div class="bloque_3">
    @foreach ($cards ?? [] as $card)
        <div class="card">
            @if (!empty($card['icono']))
                <i class="{{ $card['icono'] }}"></i>
            @endif

            <h2>{!! $card['titulo'] ?? '' !!}</h2>

            @if (!empty($card['descripcion']))
                <p>{!! $card['descripcion'] !!}</p>
            @endif
        </div>
    @endforeach
</div>
