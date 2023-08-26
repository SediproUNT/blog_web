@extends('layouts.dashboard.app')

@section('titulo')
    Posts
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>

                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control" id="body" name="body" required></textarea>
                            </div>


                            <div class="mb-3">
                                <label for="image" class="form-label">Imagen</label>
                                <input id="image" type="file" class="form-control" name="image" required>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-control" id="category" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    $(document).ready(function() {
    // Inicializa Summernote en el elemento con ID "body"
    $('#body').summernote({
    height: 400, // Altura del editor
    toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['para', ['ul', 'ol']],
    ['insert', ['link', 'picture']],
    ['view', ['fullscreen', 'codeview']]
    ]
    // Puedes personalizar las opciones de la barra de herramientas según tus necesidades
    });
    });
@endsection
