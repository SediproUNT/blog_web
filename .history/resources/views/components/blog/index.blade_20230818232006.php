@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
@endsection

{{-- @section('styles')
    <style>
        .custom-image {
            max-width: 100px;
            /* Reducir el ancho según tu preferencia */
            height: auto;
        }
    </style>
@endsection --}}

@section('styles')
    <style>
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

        /* Estilos para los botones del carrusel */
        .slick-prev,
        .slick-next {
            background-color: blue;
            /* Cambia el color aquí */
            color: white;
            /* Color del texto */
            border: none;
            border-radius: 50%;
            /* Hace los botones circulares */
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Separación entre las imágenes del carrusel */
        .custom-image-container {
            margin: 0 5px;
            /* Ajusta el valor para cambiar la separación */
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
        {{-- Logros --}}
        <div class="container py-5">
            <div class="autoplay">
                <div class="slick-slider">
                    @foreach ($logros as $logro)
                        <div class="slick-slide">
                            <div class="custom-image-container">
                                <img src="{{ $logro->url_logros }}" alt="" class="img-fluid custom-image">
                            </div>
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
        }

        $(document).ready(function() {
            $('.slick-slider').slick({
                autoplay: true,
                dots: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">Anterior</button>',
                nextArrow: '<button type="button" class="slick-next">Siguiente</button>',
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 3,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>
@endsection
