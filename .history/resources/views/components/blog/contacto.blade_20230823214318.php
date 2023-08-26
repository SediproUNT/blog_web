@extends('layouts.blog.app')

@section('titulo')
    Contacto
@endsection

@section('contenido')
    
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

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
                                <i class="fab fa-whatsapp ml-5"  style="font-size: 2.5rem;"></i> 
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