@extends('layouts.dashboard.app')

@section('titulo')
    Logros
@endsection

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Nuevo Logro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('logros.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre del Logro</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="url_logros">URL del Logro</label>
                            <input type="text" class="form-control" id="url_logros" name="url_logros" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Logro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


