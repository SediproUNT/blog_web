@extends('layouts.dashboard.app')

@section('titulo')
    Posts
@endsection

@section('contenido')
    <div class="row">
        <div class="col-md-12">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Posts</h3>
                            <p class="text-subtitle text-muted">Lista de todos los posts.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="container">
                        @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">{{ $post->title }}</div>

                                    <div class="panel-body">
                                        <p>{{ $post->body }}</p>
                                        @if ($post->image_url)
                                        <img src="{{ $post->image_url }}" alt="Post Image" class="img-fluid">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>

        </div>
    </div>
@endsection
