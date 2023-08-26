@extends('layouts.blog.app')

@section('titulo')
    Nosotros
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
            background-image: url('{{ asset('assets/img/Banner nosotros.png') }}');
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
    </style>
@endsection

@section('contenido')
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    <div class="banner-news">
        <div class="container">
            <div class="row">
                <div class="col-12 banner-box">
                    <header class="banner-heading content-news">
                        <h1>Nosotros</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none;"
                                        href="{{ route('index') }}">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Nosotros</span></li>
                            </ol>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-light position-relative">
        <div class="container py-5">

            <div class="col-lg-12 m-auto text-center my-4">
                <span class="subtitle">QUIÉNES SOMOS</span>
                <h2 class="h1 title-section">Nosotros</h2>
            </div>

            <div class="row mb-5 nosotros">

                <div class="col-lg-6 text-justify">
                    <span class="text-nosotros">
                        Somos la Sección Estudiantil de Dirección de Proyectos de la UNT, equipo multidisciplinario
                        orientado a digundir las buenas prácticas en gestión de proyectos con métodología PMI y herramientas ágiles,
                        bajo 3 enfoques académico,social y ambiental.
                    </span>

                    <div class="li mt-5">
                        <div class="icon">
                            <div><i class="fa fa-thumbtack" aria-hidden="true"></i></div>
                        </div>
                        <div>
                            <h6>Nuestra Misión:</h6>
                            <p class="text-nosotros">Formar a los futuros lideres en las buenas practicas de Dirección de Proyectos bajo un enfoque integral e innovador.</p>
                        </div>
                    </div>

                    <div class="li">
                        <div class="icon">
                            <div><i class="fa fa-eye" aria-hidden="true"></i></div>
                        </div>
                        <div>
                            <h6>Nuestra Visión:</h6>
                            <p class="text-nosotros">Ser la mejor SEDIPRO a nivel nacional a partir de los mejores gestores de proyectos.</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-6">
                    <img src="/assets/img/logo-sedipro.png" alt="logo_sedipro" class="img-fluid">
                </div>

            </div>




            <div class="row mt-5 mb-5">

                <div class="col-lg-6 m-auto mt-5 position-relative">
                    <img src="/assets/img/nosotros.jpeg" style="padding: 0 2rem;" alt="logo_sedipro" class="img-fluid">
                    <div class="experience">
                        <span class="year">10 años</span>
                        <span class="caption">proyectando vidas</span>
                    </div>
                </div>

                <div class="col-lg-6 m-auto text-justify mt-5">
                    <span class="subtitle">HISTORIA</span>
                    <h2 class="h1 title-section mb-3">Nuestra Historia</h2>

                    <p class="text-nosotros">En el año 2013, nació Sedipro UNT con un propósito claro: difundir las buenas prácticas de dirección de proyectos bajo un enfoque integral.</p>
                    <p class="text-nosotros">Hoy, al celebrar nuestros 10 años, miramos hacia el futuro con emoción y determinación.</p>
                    <p class="text-nosotros">Continuaremos impulsando la excelencia y promoviendo la ética en la dirección de proyectos, buscando siempre la innovación y la mejora continua.</p>
                    <p class="text-nosotros">¡Felices 10 años, Sedipro UNT! Sigamos dejando huellas en la historia y proyectando vidas hacia un futuro brillante.</p>
                </div>
    
            </div>




        </div>
    </section>

@endsection
