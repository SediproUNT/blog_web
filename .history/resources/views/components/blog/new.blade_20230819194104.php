@extends('layouts.blog.app')

@section('titulo')
    Noticias Sedipranas
@endsection

@section('styles')
@endsection


@section('contenido')
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    {{-- @foreach ($posts as $newsItem)
        <div class="news-item">
            <h2>{{ $newsItem->title }}</h2>
            <img src="{{ $newsItem->image }}" alt="{{ $newsItem->title }}">
            <p>{{ $newsItem->body }}</p>
            <p>{{ $newsItem->date }}</p>
        </div>
    @endforeach --}}

    <div class="noticias">
        <article>
            <header>
                <h2>Titulo de la noticia 1</h2>
                <p><time datetime="2023-08-20">20 Agosto, 2023</time></p>
            </header>
            <img src="ruta/a/imagen.jpg" alt="Descripción de la imagen">
            <p>Contenido de la noticia 1...</p>
        </article>

        <article>
            <header>
                <h2>Titulo de la noticia 2</h2>
                <p><time datetime="2023-08-20">20 Agosto, 2023</time></p>
            </header>
            <img src="ruta/a/imagen2.jpg" alt="Descripción de la imagen">
            <p>Contenido de la noticia 2...</p>
        </article>
        <!-- Repite la estructura del artículo para cada noticia que quieras mostrar -->
    </div>


    <div class="banner-block">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 banner-box">

                    <header class="banner-heading">

                        <h1>sERVICE</h1>

                        <!-- breadcrumbs of the page -->

                        <nav class="breadcrumbs">
                            <ul class="list-inline">
                                <li><a href="#">Home</a></li>

                                <li><a href="#">Service</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>

            </div>
        </div>

        <div class="bg-stretch">

            <img src="images/img41.jpg" alt="image description"
                style="width: 2535.35px; height: 352px; margin-top: 0px; margin-left: -731.676px;">

        </div>

    </div>
@endsection

@section('scripts')
@endsection
