@extends('layouts.blog.app')

@section('titulo')
    Noticias Sedipranas
@endsection

@section('styles')
    <style>
        .banner-block {
            overflow: hidden;
            border-bottom: 3px solid #db5940;
            z-index: 1;
            position: relative;
        }

        .banner-box {
            height: 352px;
            padding-top: 100px;
            /* white-space: nowrap; */
        }

        .banner-box .banner-heading {
            display: inline-block;
            white-space: normal;
            vertical-align: middle;
        }

        .banner-heading {
            margin: 11px 0 0;
        }

        .banner-heading h1 {
            margin: 0 0 15px;
            color: #fff;
            text-transform: uppercase;
            font-size: 36px;
            line-height: 40px;
        }

        .breadcrumbs {
            margin: 0;
            overflow: hidden;
            color: #db5940;
            text-transform: capitalize;
        }

        .breadcrumbs ul {
            overflow: hidden;
            margin: 0;
            font-style: italic;
            font-size: 18px;
            line-height: 22px;
            font-weight: 300;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
            margin-left: -5px;
        }

        /* Otros estilos que puedas necesitar */
    </style>
@endsection


@section('contenido')
    @include('layouts.blog.nav_info')

    @include('layouts.blog.nav')

    @include('layouts.blog.modal_search')

    {{-- @foreach ($posts as $newsItem)
        <div class="news-item">
            <h2>{{ $newsItem->title }}</h2>
            <img src="{{ $newsItem->image }}" alt="{{ $newsItem->title }}">
            <p>{{ $newsItem->body }}</p>
            <p>{{ $newsItem->date }}</p>
        </div>
    @endforeach --}}

    {{-- <div class="noticias">
        <article>
            <header>
                <h2>Titulo de la noticia 1</h2>
                <p><time datetime="2023-08-20">20 Agosto, 2023</time></p>
            </header>
            <img src="ruta/a/imagen.jpg" alt="Descripción de la imagen">
            <p>Contenido de la noticia 1...</p>
        </article>

        <article>
            <header>
                <h2>Titulo de la noticia 2</h2>
                <p><time datetime="2023-08-20">20 Agosto, 2023</time></p>
            </header>
            <img src="ruta/a/imagen2.jpg" alt="Descripción de la imagen">
            <p>Contenido de la noticia 2...</p>
        </article>
        <!-- Repite la estructura del artículo para cada noticia que quieras mostrar -->
    </div> --}}


    <div class="banner-block" style="background-image: url('{{ asset('assets/img/news.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 banner-box">
                    <header class="banner-heading">
                        <h1 style="color: #fff;">Noticias Sedipranas</h1>
                        <!-- breadcrumbs of the page -->
                        <nav class="breadcrumbs">
                            <ul class="list-inline">
                                <li><a href="/">Home</a></li>
                                <li>/</li>
                                <li><a href="/service">Service</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-9 ">
            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                <div class="flex justify-between">
                    <p class="dark:text-slate-200">
                        <span class="font-medium border-b border-dashed border-pink-400">Latest Posts </span>
                    </p>
                    <p class="dark:text-slate-200">
                        <span class="font-medium">Today </span>: 21 Augest 2023
                    </p>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                        <img src="assets/images/widgets/sm-3.jpg" alt="" class="max-w-full h-auto rounded-xl">
                    </div><!--end col-->
                    
                </div><!--end grid-->
            </div> <!--end card-->

        </div><!--end col-->
        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-3 ">
            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Related Posts</span>
            </div>
            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                        <div
                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                <img src="assets/images/widgets/sm-2.jpg" alt=""
                                    class="max-w-full h-auto rounded-xl">
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                <div class=" h-full flex flex-col p-3">
                                    <div class="w-full block">
                                        <span
                                            class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                        <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug
                                            2023</span>
                                    </div>
                                    <a href="#"
                                        class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                        This is a best Blogs card for your.
                                    </a>
                                </div><!--end card-body-->
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                        <div
                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                <img src="assets/images/widgets/sm-1.jpg" alt=""
                                    class="max-w-full h-auto rounded-xl">
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                <div class=" h-full flex flex-col p-3">
                                    <div class="w-full block">
                                        <span
                                            class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                        <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug
                                            2023</span>
                                    </div>
                                    <a href="#"
                                        class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                        This is a best Blogs card for your.
                                    </a>
                                </div><!--end card-body-->
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                        <div
                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                <img src="assets/images/widgets/sm-3.jpg" alt=""
                                    class="max-w-full h-auto rounded-xl">
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                <div class=" h-full flex flex-col p-3">
                                    <div class="w-full block">
                                        <span
                                            class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                        <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug
                                            2023</span>
                                    </div>
                                    <a href="#"
                                        class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                        This is a best Blogs card for your.
                                    </a>
                                </div><!--end card-body-->
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                        <div
                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                <img src="assets/images/widgets/sm-2.jpg" alt=""
                                    class="max-w-full h-auto rounded-xl">
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                <div class=" h-full flex flex-col p-3">
                                    <div class="w-full block">
                                        <span
                                            class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                        <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug
                                            2023</span>
                                    </div>
                                    <a href="#"
                                        class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                        This is a best Blogs card for your.
                                    </a>
                                </div><!--end card-body-->
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                        <div
                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                <img src="assets/images/widgets/sm-4.jpg" alt=""
                                    class="max-w-full h-auto rounded-xl">
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                <div class=" h-full flex flex-col p-3">
                                    <div class="w-full block">
                                        <span
                                            class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                        <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug
                                            2023</span>
                                    </div>
                                    <a href="#"
                                        class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                        This is a best Blogs card for your.
                                    </a>
                                </div><!--end card-body-->
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->

        </div><!--end col-->

    </div>
@endsection

@section('scripts')
@endsection
