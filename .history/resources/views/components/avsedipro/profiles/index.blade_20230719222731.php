@extends('layouts.blog.app')

@section('titulo')
    Personal
@endsection

@section('contenido')

    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    @include('layouts.blog.carousel')

@endsection
