@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
@endsection

@section('contenido')
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    @include('layouts.blog.carousel')

    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $post->title }}</div>

                        <div class="panel-body">
                            {{ $post->body }}
                            @if ($post->image_url)
                                <img src="{{ $post->image_url }}" alt="Post Image" class="img-fluid mt-3">
                            @endif
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 2 == 0)
                @endif
            @endforeach
        </div>
        <div class="row">


        </div>
    </div>
@endsection
