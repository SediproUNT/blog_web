@extends('layouts.dashboard.app')

@section('titulo')
    Logro
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Logros</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logros as $logro)
                                    <tr>
                                        <td>{{ $logro->id }}</td>
                                        <td>{{ $logro->nombre }}</td>
                                        <td>{{ $logro->url_logros }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
