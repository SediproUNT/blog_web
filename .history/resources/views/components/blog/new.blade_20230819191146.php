@extends('layouts.blog.app')

@section('titulo')
    Pagina de Inicio
@endsection

@section('styles')

@endsection


@section('contenido')
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    @include('layouts.blog.carousel')



@endsection

@section('scripts')

@endsection
