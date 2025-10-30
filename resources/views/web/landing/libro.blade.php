@extends('layouts.app')

@section('titulo', 'Peru Tierra de Incautos - Martin Caicho')

@section('contenido')

    @include('partials.slider-principal', ['p_elemento' => $sliders])

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">
            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'Descubre <span>“Perú, Tierra de Incautos”</span>',
                    'descripcion' =>
                        'Un libro que revela la realidad del Perú, analiza los problemas que nos afectan y propone soluciones concretas para construir un país más justo, productivo y solidario. Sumérgete en una lectura que despierta conciencia y acción.',
                ])

                @include('partials.bloque-1', [
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'alt' => 'Libro Perú, Tierra de Incautos',
                    'titulo' => 'Una obra que <span>inspira y transforma</span>',
                    'descripcion' =>
                        'Martín Caicho combina su experiencia como empresario, comunicador y líder social para ofrecer una mirada crítica, profunda y esperanzadora sobre el Perú. Este libro no solo denuncia, sino que propone soluciones claras y prácticas.',
                    'items' => [
                        [
                            'icono' => 'fa-solid fa-book-open',
                            'texto' => 'Autor: Martín Caicho, empresario y comunicador',
                        ],
                        [
                            'icono' => 'fa-solid fa-lightbulb',
                            'texto' => 'Ideas claras para reflexionar y actuar por un Perú mejor',
                        ],
                        [
                            'icono' => 'fa-solid fa-people-roof',
                            'texto' => 'Analiza la realidad social, política y económica de nuestro país',
                        ],
                        [
                            'icono' => 'fa-solid fa-flag',
                            'texto' => 'Propone soluciones concretas para generar empleo, educación y desarrollo',
                        ],
                    ],
                    'boton_icono' => 'fa-solid fa-download',
                    'boton_link' => '/descargar-libro',
                    'boton_texto' => 'Descarga el libro ahora',
                ])
            </div>
        </div>
    </div>


    <div class="g_margin_top_70">
        @include('partials.call-to-action', [
            'align' => 'center',
            'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
            'titulo' => 'Descubre cómo cambiar el Perú',
            'subtitulo' => 'Lee “Perú, Tierra de Incautos” y conoce soluciones reales para nuestro país.',
            'negrita' => '¡Descarga tu ejemplar ahora!',
            'link' => '#formulario-libro',
            'boton' => 'Descargar Libro',
        ])
    </div>


    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">
            <div class="g_contenedor_columna">

                <div class="landing_grid">
                    <!-- INFORMACIÓN -->
                    <div class="contacto_info">
                        <img src="{{ $imagen ?? asset('assets/imagen/default.jpg') }}" alt="{{ $alt ?? 'Imagen' }}">
                    </div>

                    <!-- FORMULARIO -->
                    <div class="contacto_formulario" id="formulario-libro">
                        <div class="g_contenedor_columna">
                            @include('partials.encabezado', [
                                'titulo' => 'Regístrate y <span>recibe tu libro</span>',
                                'descripcion' => 'Completa tus datos correctamente y te enviaremos.',
                            ])

                            @if (session('success'))
                                <div class="alert alert-success">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <div>{{ session('success') }}</div>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-error">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div>
                                        <strong>Por favor corrige los siguientes errores:</strong>
                                    </div>
                                </div>
                            @endif

                            <form action="{{ route('landing.libro.enviar') }}" method="POST" class="g_formulario">
                                @csrf

                                <div class="form_grupo">
                                    <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}"
                                        required>
                                    @error('nombre')
                                        <div class="error-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form_grupo">
                                    <input type="text" name="apellido" placeholder="Apellidos"
                                        value="{{ old('apellido') }}" required>
                                    @error('apellido')
                                        <div class="error-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form_grupo">
                                    <input type="email" name="email" placeholder="Correo" value="{{ old('email') }}"
                                        required>
                                    @error('email')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form_grupo">
                                    <input type="text" name="telefono" placeholder="Celular"
                                        value="{{ old('telefono') }}">
                                    @error('telefono')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>

                @include('partials.encabezado', [
                    'titulo' => 'Lo que dicen sobre <span>“Perú, Tierra de Incautos”</span>',
                ])

                @include('partials.slider-testimonios', [
                    'testimonios' => [
                        [
                            'nombre' => 'Ana Torres',
                            'cargo' => 'Docente Universitaria',
                            'comentario' =>
                                '“Perú, Tierra de Incautos” me abrió los ojos sobre los desafíos del país y propone soluciones claras. Una lectura imprescindible.',
                            'foto' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                        ],
                        [
                            'nombre' => 'Carlos Méndez',
                            'cargo' => 'Emprendedor',
                            'comentario' =>
                                'Las ideas de Martín Caicho me inspiraron a actuar y pensar en cómo podemos mejorar nuestra economía y sociedad.',
                            'foto' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                        ],
                        [
                            'nombre' => 'Lucía Rojas',
                            'cargo' => 'Periodista',
                            'comentario' =>
                                'Un libro profundo y crítico que invita a la reflexión. Excelente para quienes quieren entender la realidad del Perú.',
                            'foto' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                        ],
                        [
                            'nombre' => 'Jorge Salazar',
                            'cargo' => 'Estudiante Universitario',
                            'comentario' =>
                                'Inspirador y educativo. Me ayudó a comprender mejor los problemas del país y pensar en soluciones prácticas.',
                            'foto' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                        ],
                    ],
                    'id' => 1,
                ])

            </div>
        </div>
    </div>

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">
            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'Martín Caicho <span>Autor y Emprendedor Peruano</span>',
                ])

                @include('partials.bloque-1', [
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'alt' => 'Martín Caicho, autor peruano',
                    'titulo' => 'Un pensador comprometido con el Perú',
                    'descripcion' =>
                        'Desde El Agustino, Martín Caicho combina su experiencia empresarial, su trayectoria en gestión pública y su pasión por el periodismo para inspirar cambios reales en nuestro país. Autor de <span>“Perú, Tierra de Incautos”</span>, propone soluciones concretas y reflexiones profundas sobre la realidad peruana.',
                    'items' => [
                        ['icono' => 'fa-solid fa-book-open', 'texto' => 'Autor de “Perú, Tierra de Incautos”'],
                        [
                            'icono' => 'fa-solid fa-lightbulb',
                            'texto' => 'Ideas que inspiran acción y cambio social',
                        ],
                        [
                            'icono' => 'fa-solid fa-briefcase',
                            'texto' => 'Experiencia en empresas y gestión pública',
                        ],
                        [
                            'icono' => 'fa-solid fa-microphone',
                            'texto' => 'Voz crítica desde el periodismo y la comunicación',
                        ],
                    ],
                ])
            </div>
        </div>
    </div>

    <div class="g_margin_top_70">
        @include('partials.call-to-action', [
            'align' => 'center',
            'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
            'titulo' => 'Descubre cómo transformar el Perú',
            'subtitulo' =>
                'Te comparto ideas y soluciones concretas para un país más justo y próspero.',
            'negrita' => '¡Regístrate y descarga tu ejemplar ahora!',
            'link' => '#formulario-libro',
            'boton' => 'Descargar Libro',
        ])
    </div>
@endsection
