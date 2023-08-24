@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
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
        {{-- <div id="logrosCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($logros as $index => $logro)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ $logro->url_logros }}" class="d-block mx-auto img-fluid carousel-image" alt="{{ $logro->nombre }}">
                    </div>
                    @if ($index === 4) <!-- Mostrar solo 5 logros -->
                        @break
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#logrosCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#logrosCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}

    </section>

    {{-- Convenios --}}
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <style>
        .carousel {
            width: 80%;
            /* Ajusta el ancho del carrusel según tus necesidades */
            margin: 0 auto;
        }

        .carousel-image {
            max-width: 100%;
            /* Ajusta el tamaño de las imágenes */
            height: auto;
        }
    </style>
@endpush


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
