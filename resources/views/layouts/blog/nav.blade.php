{{-- Nav Principal --}}
<nav class="navbar navbar-expand-lg navbar-light shadow" id="templatemo_nav">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand logo" href="{{ route('index') }}">
            <img src="/assets/img/logo-sedipro.png" class="img-fluid" alt="Logo-SediproUNT" fetchpriority="high"/>
        </a>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
            id="templatemo_main_nav">

            {{-- Menu --}}
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('evento') }}">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>
            </div>

            <div class="align-self-center d-flex">
                @auth
                    <a class="nav-icon text-light position-relative text-decoration-none" href="{{ route('dashboard') }}">
                        Dashboard <i class="fa fa-fw fa-tachometer-alt ml-5"></i>
                    </a>
                @else
                    <a class="nav-icon text-light position-relative text-decoration-none" href="{{ route('login') }}">
                        Login <i class="fa fa-fw fa-user ml-5"></i>
                    </a>
                @endauth
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->
