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
        {{-- <div class="autoplay">
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
        </div> --}}

        <div class="slider autoplay slick-initialized slick-slider slick-dotted">
            <!-- Loop a través de los logros y crea un slide para cada uno -->
            {{-- @foreach ($logros as $logro) --}}
            <div class="autoplay">
                {{-- <h3>{{ $logro->titulo }}</h3>
                    <p>{{ $logro->descripcion }}</p> --}}
                <div>your content</div>
                <div>your content</div>
                <div>your content</div>
            </div>
            {{-- @endforeach --}}
        </div>

    </section>

    {{-- Convenios --}}
@endsection




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
</script>
