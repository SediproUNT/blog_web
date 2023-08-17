@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
@endsection

@section('contenido')
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    @include('layouts.blog.carousel')

    {{-- <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $post->title }}</div>

                        <div class="panel-body text-center">
                            {{ $post->body }}
                            @if ($post->image_url)
                                <img src="{{ $post->image_url }}" alt="Post Image" class="img-fluid mt-3">
                            @endif
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 2 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </div> --}}

    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$240.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Gym Weight</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_02.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$480.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                            <p class="card-text">
                                Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_03.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$360.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Summer Addides Shoes</a>
                            <p class="card-text">
                                Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text" style="text-align: justify;">
                            <span>{{ substr($post->body, 0, 300) }}</span>
                            <span id="readMore{{ $post->id }}" style="display: none;">{{ substr($post->body, 300) }}</span>
                            @if (strlen($post->body) > 300)
                                <a href="javascript:void(0);" class="read-more-link" onclick="toggleReadMore({{ $post->id }})">Ver más</a>
                            @endif
                        </p>
                    </div>
                    <a href="{{ route('posts.show', $post->id) }}">
                        <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}" style="max-width: 600px; height: auto;">
                    </a>
                </div>
            </div>
            @if ($loop->iteration % 2 == 0)
    </div>
    <div class="row justify-content-center">
        @endif
        @endforeach
    </div>

@endsection

<script>
    function toggleReadMore(postId) {
        const readMoreSpan = document.getElementById('readMore' + postId);
        const readMoreLink = document.querySelector('.read-more-link');

        if (readMoreSpan.style.display === 'none') {
            readMoreSpan.style.display = 'inline';
            readMoreLink.innerText = 'Ver menos';
        } else {
            readMoreSpan.style.display = 'none';
            readMoreLink.innerText = 'Ver más';
        }
    }
</script>
