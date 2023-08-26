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
