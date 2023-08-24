@extends('layouts.blog.app')

@section('titulo')
    Noticias Sedipranas
@endsection

@section('styles')
    <style>
        .banner-box {
            /* height: 352px; */
            padding-top: 55px;
            /* white-space: nowrap; */
        }

        .banner-news {
            position: relative;
            background-image: url('{{ asset('assets/img/banner-new.png') }}');
            background-size: 1920px 180px;
            background-position: center center;
            height: 180px;
        }

        .banner-news::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .content-news {
            position: relative;
            z-index: 2;
        }

        .content-news h1,
        .content-news li.breadcrumb-item.active,
        .breadcrumb-item+.breadcrumb-item::before,
        .content-news li.breadcrumb-item a {
            color: #fff;
            transition: ease-in-out 0.3s;
        }

        .content-news li.breadcrumb-item.active span:hover,
        .content-news li.breadcrumb-item a:hover {
            color: #3454a2;
            background: white;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
        }

        .card-contentido {
            margin: 2rem 0;
            border-radius: 1rem;
            border: none;
        }


        .cont {
            background-color: #f6f9ff;
        }

        /*--------------------------------------------------------------
                                                                # About
                                                                --------------------------------------------------------------*/
        .about .content {
            background-color: #f6f9ff;
            padding: 40px;
        }

        .about h3 {
            font-size: 14px;
            font-weight: 700;
            color: #4154f1;
            text-transform: uppercase;
        }

        .about h2 {
            font-size: 24px;
            font-weight: 700;
            color: #012970;
        }

        .about p {
            margin: 15px 0 30px 0;
            line-height: 24px;
        }

        .about .btn-read-more {
            line-height: 0;
            padding: 15px 40px;
            border-radius: 4px;
            transition: 0.5s;
            color: #fff;
            background: #4154f1;
            box-shadow: 0px 5px 25px rgba(65, 84, 241, 0.3);
        }

        .about .btn-read-more span {
            font-family: "Nunito", sans-serif;
            font-weight: 600;
            font-size: 16px;
            letter-spacing: 1px;
        }

        .about .btn-read-more i {
            margin-left: 5px;
            font-size: 18px;
            transition: 0.3s;
        }

        .about .btn-read-more:hover i {
            transform: translateX(5px);
        }
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


    <div class="banner-news">
        <div class="container">
            <div class="row">
                <div class="col-12 banner-box">
                    <header class="banner-heading content-news">
                        <h1 style="">Noticias Sedipranas</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none;"
                                        href="{{ route('index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Posts</span></li>
                            </ol>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <!-- Aquí va el contenido principal de la página -->



    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cont rounded p-4 mb-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="font-weight-medium">Últimas entradas</span>
                        </div>
                        <div>
                            <span class="font-weight-medium">Hoy</span>:
                            {{ now()->setTimezone('America/Lima')->formatLocalized('%d de %B de %Y') }}
                        </div>
                    </div>
                </div>


                @foreach ($posts as $post)
                    <div class="card d-flex card-contentido cont">
                        <div class="card-content row justify-content-center align-items-center">
                            {{-- <img class="card-img-top img-fluid" src="./assets/compiled/jpg/origami.jpg" alt="Card image cap"
                            style="height: 20rem" /> --}}
                            <div class="col-4 card-image">
                                <img class="img-fluid rounded-xl" src="{{ $post->image_url }}" alt="">
                            </div>
                            <div class="col-6 card-body">
                                {{-- <h4 class="card-title">{{ $post->title }}</h4> --}}
                                <p class="card-text">
                                    {{ $post->body }}
                                </p>
                                <button class="btn btn-primary block">Ver noticia</button>
                            </div>
                        </div>
                    </div>
                @endforeach




                <div class="cont h-100 d-flex flex-column p-3 rounded">
                    @foreach ($posts as $post)
                        <article class="p-4 mb-4">
                            <div class="h-100 d-flex flex-column justify-content-between">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 gap-4">
                                    {{-- <img src="assets/images/widgets/sm-3.jpg" alt="" class="img-fluid rounded-xl"> --}}
                                    <img class="img-fluid rounded-xl" src="{{ $post->image_url }}" alt="">
                                </div>
                                <div class="col-12 col-sm-6 col-md-8">
                                    <div class="w-100">
                                        <span
                                            class="text-sm bg-danger bg-opacity-10 text-danger rounded font-weight-medium py-1 px-2 inline-block mb-3">Health</span>
                                        <span
                                            class="text-dark font-weight-medium text-xs ms-2">{{ now()->formatLocalized('%d %B %Y') }}</span>
                                    </div>
                                    <a href="#"
                                        class="text-xl mb-5 md:mb-0 font-spectral font-semibold text-dark block">
                                        {{ $post->title }}
                                    </a>
                                    {{-- <div class="d-flex flex-wrap justify-content-between mt-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="w-8 h-8 rounded">
                                                <img class="img-fluid rounded-circle" src="assets/images/users/avatar-1.jpg"
                                                alt="logo">

                                            </div>
                                            <div class="ms-2">
                                                <a tabindex="0"
                                                    class="cursor-pointer hover-text-secondary text-dark focus-text-secondary text-dark focus-underline">
                                                    <h5 class="font-weight-medium text-sm">Fitbit Incorporation</h5>
                                                </a>
                                                <p tabindex="0" class="text-secondary text-xs font-weight-medium">San
                                                    Diego,
                                                    California</p>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="block text-secondary hover-text-primary text-decoration-underline text-decoration-dashed text-decoration-primary font-weight-medium">
                                            Read More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <section>
                    <aside class="cont rounded p-4 mb-4">
                        <span class="font-weight-medium">Noticias Relacionadas</span>
                    </aside>
                    <div class="cont bg-opacity-40 backdrop-blur-2xl rounded-2xl p-4">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 gap-4">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <img src="assets/images/widgets/sm-2.jpg" alt="" class="img-fluid rounded-xl">

                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                <div class="h-100 d-flex flex-column p-3">
                                    <div class="w-100">
                                        <span
                                            class="text-sm bg-success bg-opacity-10 text-success rounded font-weight-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                        <span class="text-dark font-weight-medium text-xs ms-2">23 August 2023</span>
                                    </div>
                                    <a href="#" class="text-lg font-weight-semibold text-secondary block">
                                        This is the best Blogs card for your.
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>





    {{-- <div class="container about"">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="content">
                    <h3>Sedipro UNT</h3>
                    <!-- <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat
                                    corrupti reprehenderit.</h2> -->
                    <p>
                        Somos la Sección Estudiantil de Dirección de Proyectos de la UNT, equipo
                        multidisciplinario orientado a difundir las buenas prácticas en gestión de proyectos con
                        metodología PMI y herramientas ágiles, bajo 3 enfoques: académico, social y ambiental.
                    </p>
                    <!-- <div class="text-center text-lg-start">
                                    <a href="#"
                                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Read More</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div> -->
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="img/LOGO SEDIPRO.png" class="img-fluid" alt="">
            </div>

        </div>
    </div> --}}






    {{-- <div class="container">
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
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 gap-4 mb-4">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
                <!-- Latest Posts Articles -->
                <article class="bg-white bg-opacity-40 backdrop-blur-2xl rounded-2xl shadow-lg p-4 mb-4">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 gap-4">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <img src="assets/images/widgets/sm-3.jpg" alt="" class="img-fluid rounded-xl">
                        </div>
                        <div class="col-12 col-sm-6 col-md-8 col-lg-8 col-xl-8">
                            <div class="h-100 d-flex flex-column p-3">
                                <div class="w-100">
                                    <span
                                        class="text-sm bg-danger bg-opacity-10 text-danger rounded font-weight-medium py-1 px-2 inline-block mb-3">Health</span>
                                    <span class="text-dark font-weight-medium text-xs ms-2">23 August 2023</span>
                                </div>
                                <a href="#" class="text-xl mb-5 md:mb-0 font-spectral font-semibold text-dark block">
                                    This is the best Blogs card for your business template.
                                </a>
                                <div class="d-flex flex-wrap justify-content-between mt-auto">
                                    <div class="d-flex align-items-center">
                                        <div class="w-8 h-8 rounded">
                                            <img class="img-fluid rounded-circle" src="assets/images/users/avatar-1.jpg"
                                                alt="logo">
                                        </div>
                                        <div class="ms-2">
                                            <a tabindex="0"
                                                class="cursor-pointer hover-text-secondary text-dark focus-text-secondary text-dark focus-underline">
                                                <h5 class="font-weight-medium text-sm">Fitbit Incorporation</h5>
                                            </a>
                                            <p tabindex="0" class="text-secondary text-xs font-weight-medium">San Diego,
                                                California</p>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="block text-secondary hover-text-primary text-decoration-underline text-decoration-dashed text-decoration-primary font-weight-medium">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3">
                <!-- Related Posts in the Aside Area -->
                <aside class="bg-white bg-opacity-40 backdrop-blur-2xl rounded-2xl shadow-lg p-4 mb-4">
                    <span class="font-weight-medium border-bottom border-dashed border-danger text-secondary">Related
                        Posts</span>
                </aside>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-1 row-cols-xl-1 gap-4 mb-4">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
                        <div class="bg-white bg-opacity-40 backdrop-blur-2xl rounded-2xl shadow-lg p-4">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 gap-4">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <img src="assets/images/widgets/sm-2.jpg" alt="" class="img-fluid rounded-xl">
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                    <div class="h-100 d-flex flex-column p-3">
                                        <div class="w-100">
                                            <span
                                                class="text-sm bg-success bg-opacity-10 text-success rounded font-weight-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                            <span class="text-dark font-weight-medium text-xs ms-2">23 August 2023</span>
                                        </div>
                                        <a href="#" class="text-lg font-weight-semibold text-secondary block">
                                            This is the best Blogs card for your.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@section('scripts')
@endsection
