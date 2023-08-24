@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
@endsection

@section('styles')
    {{-- <style>
        .custom-image {
            max-width: 100px;
            /* Reducir el ancho según tu preferencia */
            height: auto;
        }

        .autoplay {
            display: flex;
            justify-content: center;
            /* Centrar horizontalmente */
            align-items: center;
            /* Centrar verticalmente */
            padding: 20px 0;
            /* Agregar espacio alrededor del carrusel */
        }
    </style> --}}

    <style>
        .owl-theme .owl-nav {
            /* Las flechas estarán a los extremos */
            position: absolute;
            top: 50%;
            width: 100%;
        }

        .owl-theme .owl-nav .owl-prev {
            /* La flecha de la izquierda estará al extremo izquierdo */
            left: 10px;
        }

        .owl-theme .owl-nav .owl-next {
            /* La flecha de la derecha estará al extremo derecho */
            right: 10px;
        }

        .owl-theme .owl-nav .owl-prev span,
        .owl-theme .owl-nav .owl-next span {
            /* Cambiar el color de las flechas a azul */
            color: blue;
            font-size: 2em;
            /* Ajustar tamaño según las necesidades */
            background: white;
            border-radius: 50%;
            /* Para hacer el fondo redondo */
            padding: 10px;
            /* Espacio alrededor de las flechas */

        }

        .owl-carousel.owl-theme {
    position: relative;
}

.owl-carousel .owl-nav button.owl-prev,
.owl-carousel .owl-nav button.owl-next {
    position: absolute;
    background-color: blue; /* Cambia a tu color de elección */
    color: white; /* Cambia a tu color de elección */
    margin: 0;
    transform: translateY(-50%);
    top: 50%;
}

.owl-carousel .owl-nav button.owl-prev {
    left: -50px; /* Ajusta este valor según necesites */
}

.owl-carousel .owl-nav button.owl-next {
    right: -50px; /* Ajusta este valor según necesites */
}

    </style>
@endsection


@section('contenido')
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    @include('layouts.blog.carousel')


    <section class="bg-light">

        {{-- Noticias --}}
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Noticias</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($posts as $key => $post)
                    @if ($key < 6)
                        <!-- Mostrar solo los primeros 6 posts -->
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100 text-center">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text" style="text-align: justify;">
                                        <span>{{ substr($post->body, 0, 300) }}</span>
                                        <span id="readMore{{ $post->id }}"
                                            style="display: none;">{{ substr($post->body, 300) }}</span>
                                        @if (strlen($post->body) > 300)
                                            <a href="javascript:void(0);" class="read-more-link"
                                                onclick="toggleReadMore({{ $post->id }})">Ver más</a>
                                        @endif
                                    </p>
                                </div>
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}"
                                        style="max-width: 600px; height: auto;">
                                </a>
                            </div>
                        </div>
                        @if (($key + 1) % 3 == 0)
            </div>
            <div class="row justify-content-center">
                @endif
                @endif
                @endforeach
            </div>
        </div>


        {{-- Logros --}}
        <div class="container py-5">
            {{-- <div class="autoplay">
                <div class="slick-slider">
                    @foreach ($logros as $logro)
                        <div class="slick-slide">
                            <div class="custom-image-container">
                                <img src="{{ $logro->url_logros }}" alt="" class="img-fluid custom-image">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}

            <div class="owl-carousel owl-theme">
                @foreach ($logros as $logro)
                    <div class="item">
                        <img src="{{ $logro->url_logros }}" alt="">
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- Convenios --}}
@endsection

@section('scripts')
    <script>
        function toggleReadMore(postId) {
            const readMoreSpan = document.getElementById('readMore' + postId);
            const readMoreLink = document.querySelector('.read-more-link');

            if (readMoreSpan.style.display === 'none') {
                readMoreSpan.style.display = 'inline';
                readMoreLink.innerText = 'Ver menos';
            } else {
                readMoreSpan.style.display = 'none';
                readMoreLink.innerText = 'Ver más';
            }
        };
    </script>


    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>


    {{-- <script>
        $(document).ready(function() {
            $('.slick-slider').slick({
                autoplay: true,
                dots: true,
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 3,
                infinite: true,
                prevArrow: '<button type="button" class="slick-prev">Anterior</button>',
                nextArrow: '<button type="button" class="slick-next">Siguiente</button>',
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script> --}}
@endsection
