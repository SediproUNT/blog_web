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
                                        <div class="card-header">
                                            {{ $post->title }}
                                            <br>
                                            <!-- Fecha de creación del post -->
                                            <small>Fecha de creacion: {{ $post}}</small>
                                        </div>
                                        <div class="card-body">
                                            <!-- Tres líneas de texto del post -->
                                            <p class="card-text">{{ Str::limit($post->body, 300) }}</p>
                                            <!-- Botón para abrir el modal -->
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#postModal{{ $post->id }}">Leer más</a>
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

    <!-- Modales para cada post -->
    @foreach ($posts as $post)
        <div class="modal fade" id="postModal{{ $post->id }}" tabindex="-1"
            aria-labelledby="postModalLabel{{ $post->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="postModalLabel{{ $post->id }}">{{ $post->title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $post->body }}</p>
                        <!-- Imagen del post (versión completa) si está disponible -->
                        @if ($post->image_url)
                            <img src="{{ $post->image_url }}" alt="Post Image" class="img-fluid mb-3">
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
