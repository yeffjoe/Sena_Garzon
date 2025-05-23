
<div class="container my-4">
    <div class="relative w-100 overflow-hidden rounded-xl shadow-xl">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                {{-- Slide 1 --}}
                <div class="swiper-slide relative">
                    <img src="{{ asset('imagenes/carrusel1.jpg') }}" class="w-100 h-100 object-cover rounded">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success bg-opacity-75 d-flex align-items-center">
                        <div class="text-white ps-5 pe-5">
                            <h2 class="fs-2 fw-bold mb-3">¡Bienvenido a SENA Garzón!</h2>
                            <p class="lead">Explora nuestra oferta de cursos complementarios certificados y gratuitos. ¡Potencia tu perfil profesional!</p>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="swiper-slide relative">
                    <img src="{{ asset('imagenes/carrusel2.jpg') }}" class="w-100 h-100 object-cover rounded">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success bg-opacity-75 d-flex align-items-center justify-content-end">
                        <div class="text-white pe-5 text-end">
                            <h2 class="fs-2 fw-bold mb-3">Cronograma Académico</h2>
                            <p>Consulta fechas de inscripción, certificación, horarios y más.</p>
                        </div>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="swiper-slide relative">
                    <img src="{{ asset('imagenes/carrusel3.webp') }}" class="w-100 h-100 object-cover rounded">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success bg-opacity-50 d-flex align-items-center">
                        <div class="text-white ps-5">
                            <h2 class="fs-2 fw-bold mb-2">Cursos Virtuales y Presenciales</h2>
                            <p>Elige tu modalidad preferida. ¡Tú decides cómo aprender!</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Botones -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>
        </div>
    </div>
</div>


@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@endpush
