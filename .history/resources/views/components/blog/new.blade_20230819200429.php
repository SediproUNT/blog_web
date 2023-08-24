@extends('layouts.blog.app')

@section('titulo')
    Noticias Sedipranas
@endsection

@section('styles')
    <style>
        .banner-block {
    overflow: hidden;
    border-bottom: 3px solid #db5940;
    z-index: 1;
    position: relative;
}

        .banner-heading h1 {
            margin: 0 0 15px;
            color: #fff;
            text-transform: uppercase;
            font-size: 36px;
            line-height: 40px;
        }

        .breadcrumbs {
            margin: 0;
            overflow: hidden;
            color: #db5940;
            text-transform: capitalize;
        }

        .banner-box .banner-heading {
            display: inline-block;
            white-space: normal;
            vertical-align: middle;
        }

        .bg-stretch img {
            width: 100%;
            /* La imagen ocupará el ancho completo del contenedor */
            height: auto;
            /* La altura se ajustará automáticamente */
            display: block;
            /* Para asegurar que la imagen sea un elemento en bloque */
        }

        .banner-box {
            height: 352px;
            padding-top: 158px;
            white-space: nowrap;
        }

        /* Otros estilos que puedas necesitar */
    </style>
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

    {{-- <div class="noticias">
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
    </div> --}}


    <div class="banner-block" style="background-image: url('{{ asset('assets/img/news.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 banner-box">
                    <header class="banner-heading">
                        <h1 style="color: #fff;">Noticias Sedipranas</h1>
                        <!-- breadcrumbs of the page -->
                        <nav class="breadcrumbs">
                            <ul class="list-inline">
                                <li><a href="/">Home</a></li>
                                <li>/</li>
                                <li><a href="/service">Service</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
