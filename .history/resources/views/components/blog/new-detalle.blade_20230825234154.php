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

    <section class="mil-p-120-90">
        <div class="container">
            <div class="row flex-sm-row-reverse justify-content-between">
                {{-- Aside --}}
                <div class="col-lg-4 col-xl-3">
                    <div class="mil-project-info mil-mb-60">
                        <h5 class="mil-list-title mil-mb-30">Project Info</h5>
                        <p class="mil-mb-10">Client</p>
                        <h6 class="mil-mb-15">eCoshop Club</h6>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>
                        <p class="mil-mb-10">Service</p>
                        <h6 class="mil-mb-15">App Development</h6>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>
                        <p class="mil-mb-10">Industry</p>
                        <h6 class="mil-mb-15">Retail, eCommerce</h6>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>
                        <p class="mil-mb-10">Stack</p>
                        <h6>Android, Realm, Dagger 2, RxJava</h6>
                    </div>
                </div>

                <div class="col-lg-7 col-xl-8">
                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Noticias Sedipranas</span>
                    <h3 class="mil-mb-30">{{ $post->title }}</h3>
                    <p class="mil-mb-60">{{ $post->body }}</p>

                    <img src="{{ $post->image_url }}" alt="">

                    {{-- Otras secciones si es necesario --}}
                </div>


            </div>
        </div>
    </section>

    {{-- <section>
        <div class="post-details">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <img src="{{ $post->image_url }}" alt="">
        </div>
    </section> --}}
@endsection

@section('scripts')
@endsection
