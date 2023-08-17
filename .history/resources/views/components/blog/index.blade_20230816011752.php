@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
@endsection

@section('contenido')
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    @include('layouts.blog.carousel')

    {{-- <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $post->title }}</div>

                        <div class="panel-body text-center">
                            {{ $post->body }}
                            @if ($post->image_url)
                                <img src="{{ $post->image_url }}" alt="Post Image" class="img-fluid mt-3">
                            @endif
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 2 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </div> --}}

    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text text-justify">
                            <span>{{ substr($post->body, 0, 100) }}</span>
                            <span id="readMore{{ $post->id }}" style="display: none;">{{ substr($post->body, 100) }}</span>
                            @if (strlen($post->body) > 100)
                                <a href="javascript:void(0);" class="read-more-link" onclick="toggleReadMore({{ $post->id }})">Ver más</a>
                            @endif
                        </p>
                    </div>
                    <a href="{{ route('posts.show', $post->id) }}">
                        <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}" style="max-width: 600px; height: auto;">
                    </a>
                    <div class="card-body">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 2 == 0)
    </div>
    <div class="row justify-content-center">
        @endif
        @endforeach
    </div>


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
