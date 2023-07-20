@extends('layouts.auth.app')

@section('titulo')
    Iniciar Sesion
@endsection

@section('css')
    <link rel="stylesheet" href="assets/compiled/css/auth-forgot-password.css">
@endsection


@section('contenido')
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="./assets/img/logo-sedipro.png" class="img-fluid" alt="Logo-SediproUNT"></a>
                </div>
                <h1 class="auth-title">Iniciar Sesión</h1>
                {{-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> --}}

                {{-- <form action="index.html"> --}}
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group position-relative has-icon-left mb-4">

                        {{-- <input
                        type="text"
                        class="form-control form-control-xl"
                        placeholder="Usuario"
                        id="username"
                        type="username"
                        value="{{ old('username') }}"
                        > --}}

                        <input type="text" class="form-control form-control-xl" name="email"
                            placeholder="Correo Electronico" id="email" type="email" value="{{ old('email') }}">


                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">

                        <input type="password" class="form-control form-control-xl" name="password" placeholder="Password"
                            id="password" type="password" value="{{ old('password') }}">

                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>

                    {{-- <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" name="remenber">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Mantenerme conectado
                        </label>
                    </div> --}}

                    {{-- <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Iniciar Sesión</button> --}}

                    <input type="submit" value="Iniciar Sesión" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">

                    <a href="" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                            alt="Google" class="" height="50" width="25"> Iniciar sesión con Google
                    </a>


                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">¿No tienes cuenta? <a href="{{ route('register') }}"
                            class="font-bold">Registrate</a>.</p>
                    {{-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
@endsection
