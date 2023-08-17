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
                    <a href="{{ route('posts.show', $post->id) }}">
                        <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}">
                    </a>
                    <div class="card-body">
                        <a href="{{ route('posts.show', $post->id) }}" class="h2 text-decoration-none text-dark">{{ $post->title }}</a>
                        <p class="card-text">{{ $post->excerpt }}</p>
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
