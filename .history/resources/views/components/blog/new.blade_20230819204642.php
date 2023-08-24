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


        .gap-4 {
            gap: 1rem;
        }

        .grid-cols-12 {
            grid-template-columns: repeat(12, minmax(0, 1fr));
        }

        .grid {
            display: grid;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .backdrop-blur-2xl {
            --tw-backdrop-blur: blur(40px);
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .shadow-lg {
            --tw-shadow: 0 10px 25px -3px rgb(60 72 88 / 0.15);
            --tw-shadow-colored: 0 10px 25px -3px var(--tw-shadow-color);
            -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .p-4 {
            padding: 1rem;
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .rounded-2xl {
            border-radius: 1rem;
        }

        .w-full {
            width: 100%;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .relative {
            position: relative;
        }

        .justify-between {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .backdrop-blur-2xl {
    --tw-backdrop-blur: blur(40px);
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
.shadow-lg {
    --tw-shadow: 0 10px 25px -3px rgb(60 72 88 / 0.15);
    --tw-shadow-colored: 0 10px 25px -3px var(--tw-shadow-color);
    -webkit-box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
}
.p-4 {
    padding: 1rem;
}
.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}
.rounded-2xl {
    border-radius: 1rem;
}
.w-full {
    width: 100%;
}
.mb-4 {
    margin-bottom: 1rem;
}
.relative {
    position: relative;
}
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
                    <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                        <div class=" h-full flex flex-col p-3">
                            <div class="w-full block">
                                <span
                                    class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">Helth</span>
                                <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span>
                            </div>
                            <a href="#"
                                class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
                                This is a best Blogs card for your business template.
                            </a>
                            <div class="flex flex-wrap justify-between mt-auto">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded">
                                        <img class="w-full h-full overflow-hidden object-cover rounded object-center"
                                            src="assets/images/users/avatar-1.jpg" alt="logo">
                                    </div>
                                    <div class="ml-2">
                                        <a tabindex="0"
                                            class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline">
                                            <h5 class=" font-medium text-sm">Fitbit Incorporation</h5>
                                        </a>
                                        <p tabindex="0"
                                            class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">
                                            San Diego, California</p>
                                    </div>
                                </div>
                                <a href=""
                                    class="block text-slate-500 dark:text-slate-400 hover:text-slate-600 underline decoration-1 decoration-dashed underline-offset-4  decoration-primary-500 font-medium  focus:outline-none self-center">Read
                                    More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-right"
                                        class="lucide lucide-arrow-right self-center inline-block ms-1 h-4 w-4">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg></a>
                            </div>
                        </div><!--end card-body-->
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
            </div><!--end grid-->
        </div><!--end col-->
    </div>
@endsection

@section('scripts')
@endsection
