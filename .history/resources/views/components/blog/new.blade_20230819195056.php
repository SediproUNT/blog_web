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
            text-align: center;
            /* Centra el contenido */
            color: #fff;
            /* Cambia el color del texto si es necesario */
        }

        .banner-heading h1 {
            margin: 0;
            padding: 0;
            font-size: 36px;
            /* Ajusta el tamaño de fuente según tu preferencia */
        }

        .breadcrumbs {
            margin-top: 10px;
            font-size: 14px;
            color: #aaa;
        }

        .breadcrumbs a {
            color: #aaa;
            /* Cambia el color del enlace si es necesario */
        }

        .breadcrumbs a:hover {
            color: #db5940;
            /* Cambia el color del enlace al pasar el cursor si es necesario */
        }

        .bg-stretch img {
            width: 100%;
            height: auto;
            display: block;
        }

        .noticias {
            text-align: center;
            /* Centra el contenido */
            margin: 40px 0;
            /* Ajusta el margen superior e inferior según tu diseño */
        }

        .noticias article {
            margin-bottom: 30px;
            /* Ajusta el margen inferior entre artículos */
            padding: 20px;
            border: 1px solid #ccc;
            /* Añade un borde a los artículos si lo deseas */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Añade una sombra si lo deseas */
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
        <header class="banner-heading">
            <h1>Noticias Sedipranas</h1>
            <!-- breadcrumbs of the page -->
            <nav class="breadcrumbs">
                <ul class="list-inline">
                    <li><a href="#">Inicio</a></li>
                    <li>Noticias</li>
                </ul>
            </nav>
        </header>
    </div>

@endsection

@section('scripts')
@endsection
