@extends('layouts.dashboard.app')

@section('titulo')
    Crear Logros
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('logros.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre del Logro</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="imagen">Imagen del Logro</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Crear Logro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
