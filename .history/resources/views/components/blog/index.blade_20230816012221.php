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

    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>

        </div>
    </section>




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
