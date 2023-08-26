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

        .mil-slider-btn-prev.disabled,
        .mil-slider-btn-next.disabled {
            cursor: not-allowed;
            opacity: 0.5;
            pointer-events: none;
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
                        <a class="mil-link link-left mil-mb-30" href="/portfolio"><i class="fas fa-arrow-left"></i><span>All
                                Cases</span></a>
                        <h1 style="">{{ $post->title }}</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>





    <section class="mil-p-120-90">
        <div class="container">
            <div class="row flex-sm-row-reverse justify-content-between">
                {{-- Aside --}}
                <div class="col-lg-4 col-xl-3">
                    <div class="mil-mb-60">F
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
            @if ($previousPostId)
                <a class="mil-slider-nav" href="{{ route('news.show', ['id' => $previousPostId]) }}">
                    <div class="mil-slider-btn-prev mil-button-sm mil-blog-prev">
                        <i class="fas fa-arrow-left"></i><span class="mil-h6">Más reciente</span>
                    </div>
                </a>
            @else
                <div class="mil-slider-nav"><a class="mil-slider-btn-prev mil-blog-prev disabled">
                        <i class="fas fa-arrow-left"></i><span class="mil-h6">Más reciente</span>
                </div>
            @endif

            <a class="mil-button-all" href="{{ route('news.index') }}"><span><i class="fas fa-list"></i></span></a>

            @if ($nextPostId)
                <div class="mil-slider-nav"><a class="mil-slider-btn-next mil-blog-next"
                        href="{{ route('news.show', ['id' => $nextPostId]) }}"><span class="mil-h6">Más antiguos</span><i
                            class="fas fa-arrow-right"></i></a></div>
            @else
                <div class="mil-slider-nav"><a class="mil-slider-btn-next mil-blog-next disabled"><span class="mil-h6">Más
                            antiguos</span><i class="fas fa-arrow-right"></i></a></div>
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
@endsection
