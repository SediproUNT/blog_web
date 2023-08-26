@extends('layouts.blog.app')

@section('titulo')
    Nosotros
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
    background-image: url('{{ asset('assets/img/Banner contactos.pngpublic/assets/img/Banner nosotros.png') }}');
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
    </style>
@endsection

@section('contenido')

    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')


@endsection
