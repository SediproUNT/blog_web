@extends('layouts.dashboard.app')

@section('titulo')
    Categorias
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Category</div>
                    <div class="panel-body">
                        <form action="{{ route ('categoi')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
