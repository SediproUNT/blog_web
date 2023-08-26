@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
@endsection

@section('styles')
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
            background-color: blue;
            /* Cambia a tu color de elección */
            color: white;
            /* Cambia a tu color de elección */
            margin: 0;
            transform: translateY(-50%);
            top: 50%;
        }

        .owl-carousel .owl-nav button.owl-prev {
            left: -50px;
            /* Ajusta este valor según necesites */
        }

        .owl-carousel .owl-nav button.owl-next {
            right: -50px;
            /* Ajusta este valor según necesites */
        }

        /* .mil-card {
                            display: grid;
                            grid-template-rows: 1fr auto;
                        } */

        .mil-cover-frame {
            grid-row: 1 / span 2;
            position: relative;
            overflow: hidden;
        }

        .mil-cover-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            filter: blur(10px);
        }

        .mil-description {
            padding: 1rem;
        }

        .mil-card {
            position: relative;
            overflow: hidden;
        }

        /* .mil-card .mil-cover-frame {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 75%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0 auto;
        } */

        .mil-card .mil-cover-frame {
            position: relative;
            width: 100%;
            /* Ajusta este valor según el tamaño deseado de la imagen principal */
            height: 0;
            padding-bottom: 100%;
            /* Ajusta este valor según la relación de aspecto de tus imágenes */
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0 auto;
            /* Centra horizontalmente la imagen */
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
        {{-- <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1 title-section">Noticias</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($posts as $key => $post)
                    @if ($key < 6)
                        <!-- Mostrar solo los primeros 6 posts -->
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100 text-center news-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">
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
            <!-- Botón "Más Noticias" -->
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <a href="{{ route('news.index') }}" class="btn btn-primary mt-4">Más Noticias</a>
                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="row align-items-center mil-mb-60-adapt">
                <div class="col-12 col-md-6 col-xl-6">
                    <h2 class="mil-mb-30">Noticias Sedipranas</h2>
                </div>
                <div class="col-12 col-md-6 col-xl-6 d-flex justify-content-end">
                    <div class="mil-slider-nav mil-mb-30">
                        <div class="mil-slider-btn-prev mil-works-prev" tabindex="0" role="button"
                            aria-label="Previous slide">
                            <i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span>
                        </div>
                        <div class="mil-slider-btn-next mil-works-next" tabindex="0" role="button"
                            aria-label="Next slide">
                            <span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="swiper swiper-container swiper-initialized swiper-horizontal mil-works-slider mil-mb-90 swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-b2336b49791b3a6c" aria-live="polite">
                    @foreach ($posts as $post)
                        <div class="swiper-slide" role="group" aria-label="1 / 4">
                            <a class="mil-card" href="{{ route('news.show', ['id' => $post->id]) }}">
                                <div class="mil-cover-frame">
                                    <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}">
                                </div>
                                <div class="mil-description">
                                    <div class="mil-card-title">
                                        <h4 class="mil-mb-20">{{ $post->title }}</h4>
                                        <h6>Fecha: <span class="mil-accent">{{ $post->created_at->format('d-m-Y') }}</span>
                                        </h6>
                                    </div>
                                    <div class="mil-card-text">
                                        <p>{{ \Illuminate\Support\Str::limit($post->body, 200) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-xl-6"><a class="mil-link mil-mb-30" href="{{ route('news.index')}}"><span>Ver todas las
                            noticias</span><i class="fas fa-arrow-right"></i></a></div>
            </div>
        </div>




        {{-- Logros --}}
        <div class="container py-5">
            <div class="row text-center pb-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1 title-section">'Nose'</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="owl-carousel owl-theme">
                    @foreach ($logros as $logro)
                        <div class="item">
                            <img src="{{ $logro->url_logros }}" alt="">
                        </div>
                    @endforeach
                </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 2,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.mil-slider-btn-next',
                    prevEl: '.mil-slider-btn-prev',
                },
            });
        });
    </script>
@endsection
