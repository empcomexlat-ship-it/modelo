@extends('layouts.app')

@section('titulo', 'Martin Caicho')

@section('contenido')

    @include('partials.banner', [
        'imagenUrl' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-1.jpg',
        'titulo' => '¿Quién soy y que pienso?',
    ])

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">
            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'La <span>Solución</span> para un Perú con futuro',
                    'descripcion' => 'Propongo una visión renovadora basada en tres ejes: desarrollo económico inclusivo, fortalecimiento de los valores ciudadanos y modernización de la gestión pública. 
                                                                                                                         Desde mi experiencia en el sector privado y la función pública, impulso ideas que buscan unirnos como peruanos para construir un país más justo, productivo y solidario.',
                ])


                <div class="razones_section">
                    <div class="grid-columna invertir_movil">
                        <div class="imagen">
                            <img src="http://127.0.0.1:8000/assets/imagen/default.jpg" alt="Especialistas">
                        </div>
                        <div class="texto">
                            <h3>Desarrollo económico con rostro humano</h3>
                            <p>Promuevo un modelo económico que prioriza al emprendedor, al trabajador y a las familias
                                peruanas.
                                Mi propuesta busca generar empleo digno, impulsar la innovación y fortalecer la producción
                                nacional con justicia social.</p>
                            <ul>
                                <li><i class="fa-solid fa-hand-holding-dollar"></i> Apoyo a los emprendedores y pequeñas
                                    empresas</li>
                                <li><i class="fa-solid fa-chart-line"></i> Promoción de la economía regional</li>
                                <li><i class="fa-solid fa-industry"></i> Fomento de la producción nacional</li>
                                <li><i class="fa-solid fa-graduation-cap"></i> Capacitación técnica y laboral</li>
                                <li><i class="fa-solid fa-briefcase"></i> Impulso a la formalización y al empleo digno</li>
                            </ul>

                        </div>

                    </div>

                    <div class="grid-columna invertir_movil">
                        <div class="texto">
                            <h3>Gestión pública moderna y transparente</h3>
                            <p>Desde mi experiencia en el sector público, defiendo una administración eficiente,
                                meritocrática y enfocada en resultados.
                                Busco eliminar la corrupción, digitalizar los procesos del Estado y acercar la gestión a los
                                ciudadanos.</p>
                            <ul>
                                <li><i class="fa-solid fa-handshake"></i> Promuevo la transparencia en el uso de los
                                    recursos públicos</li>
                                <li><i class="fa-solid fa-laptop-code"></i> Impulso la digitalización y el gobierno
                                    electrónico</li>
                                <li><i class="fa-solid fa-city"></i> Fortalezco la gestión de los gobiernos locales</li>
                                <li><i class="fa-solid fa-chalkboard-user"></i> Apoyo la capacitación constante de los
                                    servidores públicos</li>
                                <li><i class="fa-solid fa-scale-balanced"></i> Combato la corrupción con firmeza y
                                    compromiso</li>
                            </ul>
                        </div>

                        <div class="imagen">
                            <img src="http://127.0.0.1:8000/assets/imagen/default.jpg" alt="Especialidades">
                        </div>
                    </div>

                    <div class="grid-columna invertir_movil">
                        <div class="imagen">
                            <img src="http://127.0.0.1:8000/assets/imagen/default.jpg" alt="Productos">
                        </div>
                        <div class="texto">
                            <h3>Valores y educación cívica para un nuevo Perú</h3>
                            <p>Estoy convencido de que el cambio real comienza en cada persona. Por eso, promuevo la
                                educación en valores,
                                la participación ciudadana y la formación de líderes comprometidos con el bien común y el
                                respeto mutuo.</p>
                            <ul>
                                <li><i class="fa-solid fa-graduation-cap"></i> Fomento la educación cívica y moral en todos
                                    los niveles</li>
                                <li><i class="fa-solid fa-user-group"></i> Impulso programas de liderazgo juvenil</li>
                                <li><i class="fa-solid fa-heart"></i> Promuevo una cultura basada en el respeto y la empatía
                                </li>
                                <li><i class="fa-solid fa-first-aid"></i> Apoyo la formación en primeros auxilios y
                                    convivencia ciudadana</li>
                                <li><i class="fa-solid fa-flag"></i> Refuerzo la unidad y el orgullo de ser peruanos</li>
                            </ul>
                        </div>
                    </div>
                </div>

                @include('partials.encabezado', [
                    'titulo' => 'Estoy <span>comprometido</span> con mi Perú',
                    'descripcion' => 'Conóceme un poco más.',
                ])

                @include('partials.bloque-3', [
                    'cards' => [
                        [
                            'icono' => 'fa-solid fa-bullseye',
                            'titulo' => 'Misión',
                            'descripcion' => 'Mi misión es inspirar a los peruanos a creer en el cambio a través de la educación, la ética y la acción. 
                                                                              Busco promover un liderazgo ciudadano que transforme nuestra realidad desde los valores y el compromiso social.',
                        ],
                        [
                            'icono' => 'fa-solid fa-eye',
                            'titulo' => 'Visión',
                            'descripcion' =>
                                'Sueño con un Perú unido, próspero y transparente, donde el esfuerzo, la innovación y la honestidad sean las bases de nuestro desarrollo.',
                        ],
                        [
                            'icono' => 'fa-solid fa-handshake',
                            'titulo' => 'Valores',
                            'descripcion' => 'Me guío por la honestidad, el trabajo, la justicia social, la empatía y la responsabilidad. 
                                                                              Estos principios inspiran cada propuesta y cada acción que realizo por el bienestar de nuestro país.',
                        ],
                    ],
                ])
            </div>
        </div>
    </div>

    <div class="g_margin_top_70">
        @include('partials.call-to-action', [
            'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
            'titulo' => 'Mis propuestas para transformar el Perú',
            'subtitulo' =>
                'En mi libro “Perú, Tierra de Incautos”, comparto mi visión sobre cómo construir un país.',
            'negrita' => 'Más justo, productivo y solidario. ',
            'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
            'boton' => 'Descargar mi Libro',
        ])

    </div>

@endsection
