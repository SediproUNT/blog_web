@extends('layouts.blog.app')

@section('titulo')
    Contacto
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
    background-image: url('{{ asset('assets/img/Banner contactos.png') }}');
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
                        <h1 style="">Contacto</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none;"
                                        href="{{ route('index') }}">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Contacto</span></li>
                            </ol>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-light position-relative">
        <div class="container py-5">

            <div class="col-lg-6 m-auto d-flex justify-content-center align-items-center">
                <h1 class="h1" style="font-weight: 600 !important; color: #1F3973;">Contacto</h1>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">

                    <div class="row contact">
                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="col pt-3 contact-info">
                            <p class="contact-info-title ">Llámanos</p>
                            <p> +51 970 153 565</p>
                        </div>
                    </div>

                    <div class="row contact">
                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <div class="contact-icon">
                                <i class="fab fa-whatsapp ml-5" style="font-size: 2.5rem;"></i>
                            </div>
                        </div>
                        <div class="col py-3 contact-info">
                            <p class="contact-info-title ">Hablemos por WhatsApp</p>
                            <p> +51 970 153 565</p>
                            <p> Te ayudamos a resolver tus dudas</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">


                    <div class="row contact">
                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <div class="contact-icon">
                                <i class="fa fa-fw fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col py-3 contact-info">
                            <p class="contact-info-title ">Escríbenos</p>
                            <p>sedipro@unitru.edu.pe</p>
                        </div>
                    </div>

                    <div class="row contact">
                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <div class="contact-icon">
                                <i class="fa fa-fw fa-heart"></i>
                            </div>
                        </div>
                        <div class="col py-3 contact-info">
                            <p class="contact-info-title ">Síguenos</p>
                            <p> Encuentranos en :</p>
                            <p class="contact-socials">
                                <a href="https://www.facebook.com/SediproUNT" target="_blank">Facebook |</a>
                                <a href="https://www.instagram.com/sediprount/" target="_blank">Instagram |</a>
                                <a href="https://www.youtube.com/@SEDIPROUNT" target="_blank">Youtube |</a>
                                <a href="https://www.linkedin.com/company/sediprount/" target="_blank">Linkedin</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
