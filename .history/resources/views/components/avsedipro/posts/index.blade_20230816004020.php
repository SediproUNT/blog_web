@extends('layouts.dashboard.app')

@section('titulo')
    Posts
@endsection

@section('contenido')
<div class="row">
    <div class="col-md-12">
        <!-- Encabezado móvil -->
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <!-- Título y migas de pan -->
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Posts</h3>
                        <p class="text-subtitle text-muted">Lista de todos los posts.</p>
                    </div>
                    <!-- Navegación -->
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Posts</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="container">
                    <!-- Lista de posts -->
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <!-- Título del post -->
                                <div class="card-header">{{ $post->title }}</div>
                                <div class="card-body">
                                    <!-- Contenido del post -->
                                    <p class="card-text">{{ $post->body }}</p>
                                    <!-- Imagen del post si está disponible -->
                                    @if ($post->image_url)
                                    <img src="{{ $post->image_url }}" alt="Post Image" class="img-fluid mb-3">
                                    @endif
                                    <!-- Botón para leer más -->
                                    <a href="#" class="btn btn-primary">Leer más</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Paginación -->
                    <div class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
