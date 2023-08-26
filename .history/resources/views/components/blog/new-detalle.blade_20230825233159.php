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

    

    <section>
        <div class="post-details">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <img src="{{ $post->image_url }}" alt="">
        </div>
    </section>


@endsection

@section('scripts')
@endsection
