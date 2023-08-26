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
        /* background-color: #f6f9ff; */
        background-color: #3453a228
    }

    .cont .card-image {
        padding: 1rem 1rem;
    }


    .cont .card-image img {
        border-radius: 1rem;
        margin-left: 1rem;
    }

    .cont .card-body p,
    .cont .card-body button {
        margin-left: 1rem
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

    <section class="mil-p-120-90">
        <div class="container">
            <div class="row flex-sm-row-reverse justify-content-between">
                {{-- Aside --}}
                <div class="col-lg-4 col-xl-3">
                    <div class="mil-mb-60">
                        <h5 class="mil-list-title mil-mb-30">Recent Posts</h5><a class="mil-post-sm mil-mb-15"
                            href="/publication">
                            <div class="mil-cover-frame"><img src="img/blog/6.jpg" alt="cover"></div>
                            <div class="mil-description">
                                <h6>The World’s Fastest 2 Qubit Qate</h6>
                            </div>
                        </a><a class="mil-post-sm mil-mb-15" href="/publication">
                            <div class="mil-cover-frame"><img src="img/blog/5.jpg" alt="cover"></div>
                            <div class="mil-description">
                                <h6>Build Your Money Machine, Take Control</h6>
                            </div>
                        </a><a class="mil-post-sm mil-mb-15" href="/publication">
                            <div class="mil-cover-frame"><img src="img/blog/4.jpg" alt="cover"></div>
                            <div class="mil-description">
                                <h6>Android App For Shaving Products Drive</h6>
                            </div>
                        </a><a class="mil-post-sm mil-mb-15" href="/publication">
                            <div class="mil-cover-frame"><img src="img/blog/3.jpg" alt="cover"></div>
                            <div class="mil-description">
                                <h6>Positioning Your Self As a Pro Consultant</h6>
                            </div>
                        </a>
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

    <div class="container mil-mb-120">
        <div class="mil-pagination mil-hidden-button"><a class="mil-slider-nav" href="/project">
                <div class="mil-slider-btn-prev mil-button-sm mil-blog-prev"><i class="fas fa-arrow-left"></i><span
                        class="mil-h6">Prev</span></div>
            </a><a class="mil-button-all" href="/portfolio"><span><i class="fas fa-list"></i></span></a>
            <div class="mil-slider-nav"><a class="mil-slider-btn-next mil-blog-next" href="/project"><span
                        class="mil-h6">Next</span><i class="fas fa-arrow-right"></i></a></div>
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
