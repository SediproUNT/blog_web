@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
@endsection

@section('contenido')
    
    @include('layouts.blog.auth.nav_info')

    @include('layouts.blog.auth.nav')

    @include('layouts.blog.auth.modal_search')

    @include('layouts.blog.auth.carousel')

@endsection
