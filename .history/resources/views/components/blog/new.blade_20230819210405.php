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

        .banner-box {
            height: 352px;
            padding-top: 100px;
            /* white-space: nowrap; */
        }

        .banner-box .banner-heading {
            display: inline-block;
            white-space: normal;
            vertical-align: middle;
        }

        .banner-heading {
            margin: 11px 0 0;
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

        .breadcrumbs ul {
            overflow: hidden;
            margin: 0;
            font-style: italic;
            font-size: 18px;
            line-height: 22px;
            font-weight: 300;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
            margin-left: -5px;
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
                <div class="col-12 banner-box">
                    <header class="banner-heading">
                        <h1 style="color: #fff;">Noticias Sedipranas</h1>
                        <!-- Breadcrumbs of the page -->
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

   <div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="bg-white bg-opacity-40 backdrop-blur-2xl rounded-2xl shadow-lg p-4 mb-4">
                <div class="d-flex justify-content-between">
                    <p class="text-dark">
                        <span class="font-weight-medium border-bottom border-dashed border-danger">Latest Posts</span>
                    </p>
                    <p class="text-dark">
                        <span class="font-weight-medium">Hoy</span>: {{ now()->setTimezone('America/Lima')->formatLocalized('%d de %B de %Y') }}
                    </p>
                </div>
            </div>
            <article class="bg-white bg-opacity-40 backdrop-blur-2xl rounded-2xl shadow-lg p-4 mb-4">
                <!-- Contenido del artículo -->
            </article>
        </div>

        <div class="col-12 col-lg-4">
            <aside class="bg-white bg-opacity-40 backdrop-blur-2xl rounded-2xl shadow-lg p-4 mb-4">
                <span class="font-weight-medium border-bottom border-dashed border-danger text-secondary">Related Posts</span>
            </aside>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-1 row-cols-xl-1 gap-4 mb-4">
                <div class="col-12">
                    <div class="bg-white bg-opacity-40 backdrop-blur-2xl rounded-2xl shadow-lg p-4">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 gap-4">
                            <div class="col-12">
                                <div class="bg-white bg-opacity-40 backdrop-blur-2xl rounded-2xl shadow-lg p-4">
                                    <!-- Contenido del aside -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection
