@if (!empty($testimonios) && count($testimonios) > 0)
    @php
        $slidesCount = count($testimonios);
    @endphp

    <div class="partials_contenedor_slider_testimonios">
        <div class="swiper SwiperSliderTestimonios-{{ $id ?? 'default' }}">
            <div class="swiper-wrapper">
                @foreach ($testimonios as $t)
                    <div class="swiper-slide">
                        <div class="testimonio_card">
                            <div class="testimonio_foto">
                                <img src="{{ $t['foto'] ?? asset('assets/imagen/default.jpg') }}"
                                     alt="{{ $t['nombre'] ?? 'Persona' }}">
                            </div>
                            <p class="testimonio_comentario">"{{ $t['comentario'] ?? '' }}"</p>
                            <p class="testimonio_nombre">{{ $t['nombre'] ?? '' }}</p>
                            @if (!empty($t['cargo']))
                                <p class="testimonio_cargo">{{ $t['cargo'] }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        (function() {
            const slidesCount = {{ $slidesCount }};
            const selector = '.SwiperSliderTestimonios-{{ $id ?? 'default' }}';
    
            new Swiper(selector, {
                slidesPerView: 3.5,
                spaceBetween: 20,
                autoplay: slidesCount > 1 ? {
                    delay: 3500,
                    disableOnInteraction: false,
                } : false,
                loop: slidesCount > 4, // 👈 solo hace loop si hay más de 4 slides
                grabCursor: slidesCount > 1,
    
                breakpoints: {
                    1024: {
                        slidesPerView: Math.min(3.5, slidesCount),
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: Math.min(2.5, slidesCount),
                        spaceBetween: 20,
                    },
                    0: {
                        slidesPerView: Math.min(1.2, slidesCount),
                        spaceBetween: 20,
                    },
                }
            });
        })();
    </script>
    
@endif
