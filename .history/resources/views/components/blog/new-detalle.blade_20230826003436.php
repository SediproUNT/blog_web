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
                    <div class="mil-mb-60">
                        <h5 class="mil-list-title mil-mb-30">Entradas recientes</h5>
                        @foreach ($recentPosts as $recentPost)
                            <a class="mil-post-sm mil-mb-15" href="{{ route('news.show', ['id' => $recentPost->id]) }}">
                                <div class="mil-cover-frame"><img src="{{ $recentPost->image_url }}" alt="cover"></div>
                                <div class="mil-description">
                                    <h6>{{ $recentPost->title }}</h6>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-7 col-xl-8"><span class="mil-suptitle mil-suptitle-2 mil-mb-30">Noticias
                        Sedipranas</span>
                    <h3 class="mil-mb-30">{{ $post->title }}</h3>
                    <p class="mil-mb-60">{{ $post->body }}</p>
                    <img src="{{ $post->image_url }}" alt="">

                    {{-- <h3 class="mil-mb-30">Our Solution</h3>
                    <p class="mil-mb-60">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look even
                        slightly believable.</p>
                    <div class="row">
                        <div class="col-xl-6">
                            <ul class="mil-check-icon-list mil-mb-15">
                                <li><img src="img/icons/sm/12.svg" alt="icon"><span class="mil-dark">Quis suspendisse
                                        ultrices gravida.</span></li>
                                <li><img src="img/icons/sm/12.svg" alt="icon"><span class="mil-dark">Consectetur
                                        adipiscing elit.</span></li>
                                <li><img src="img/icons/sm/12.svg" alt="icon"><span class="mil-dark">Quis suspendisse
                                        ultrices gravida.</span></li>
                                <li><img src="img/icons/sm/12.svg" alt="icon"><span class="mil-dark">Consectetur
                                        adipiscing elit.</span></li>
                            </ul>
                        </div>
                        <div class="col-xl-6 mil-mb-30">
                            <ul class="mil-check-icon-list">
                                <li><img src="img/icons/sm/12.svg" alt="icon"><span class="mil-dark">Quis suspendisse
                                        ultrices gravida.</span></li>
                                <li><img src="img/icons/sm/12.svg" alt="icon"><span class="mil-dark">Consectetur
                                        adipiscing elit.</span></li>
                                <li><img src="img/icons/sm/12.svg" alt="icon"><span class="mil-dark">Quis suspendisse
                                        ultrices gravida.</span></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="mil-divider mil-mb-60"></div>
    </div>

    <div class="container mil-mb-120">
        <div class="mil-pagination mil-hidden-button">
            @if ($nextPostId)
                <div class="mil-slider-nav"><a class="mil-slider-btn-next mil-blog-next"
                        href="{{ route('news.show', ['id' => $nextPostId]) }}"><i class="fas fa-arrow-left"></i><span
                            class="mil-h6">Más reciente</span></a></div>
            @else
                <div class="mil-slider-nav"><a class="mil-slider-btn-next mil-blog-next disabled"><i
                            class="fas fa-arrow-left"></i><span class="mil-h6">Más
                            reciente</span></a></div>
            @endif

            <a class="mil-button-all" href="{{ route('news.index') }}"><span><i class="fas fa-list"></i></span></a>

            @if ($previousPostId)
                <a class="mil-slider-nav" href="{{ route('news.show', ['id' => $previousPostId]) }}">
                    <div class="mil-slider-btn-prev mil-button-sm mil-blog-prev">
                        <span class="mil-h6">Más
                            antiguos</span><i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            @else
                <div class="mil-slider-btn-prev mil-button-sm mil-blog-prev disabled">
                    <span class="mil-h6">Más
                        antiguos</span>
                </div>
            @endif




        </div>
    </div>






    {{-- <section>
        <div class="post-details">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <img src="{{ $post->image_url }}" alt="">
        </div>
    </section> --}}
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Habilitar o deshabilitar el swiper según la presencia de la clase "disabled"
            var nextBtn = document.querySelector('.mil-slider-btn-next');
            var prevBtn = document.querySelector('.mil-slider-btn-prev');

            if (nextBtn && nextBtn.classList.contains('disabled')) {
                swiper.params.navigation.nextEl = null;
            }

            if (prevBtn && prevBtn.classList.contains('disabled')) {
                swiper.params.navigation.prevEl = null;
            }
        });
    </script>
@endsection
