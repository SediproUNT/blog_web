<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;




class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at', 'desc')->paginate(16); // para la visualización en 4x4
        return view('components.avsedipro.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('components.avsedipro.posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();

        // $this->validate($request, [
        //     'title' => 'required|max:255',
        //     'body' => 'required',
        //     'category_id' => 'required|exists:categories,id',
        //     'user_id' => 'required|exists:users,id',
        //     'image' => 'required|image'
        // ]);


        // // Validar y guardar los datos del post en la base de datos

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images', 'firebase');
        //     $imageUrl = Storage::disk('firebase')->url($imagePath);

        //     // Asociar la URL de la imagen al post y guardar los cambios

        //     $post = new Post;
        //     $post->title = $request->title;
        //     $post->body = $request->body;
        //     $post->category_id = $request->category_id;
        //     $post->user_id = $request->user_id; // or auth()->id()
        //     $post->image = $imageUrl;
        //     $post->save();
        // }

        // // Redirigir o mostrar una respuesta

        // return redirect(route('posts.index'));


        // Validar los datos del formulario
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image'
        ]);

        // Procesar los datos y guardar en la base de datos
        $datos = [
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'category_id' => $request->input('category_id'),
            'user_id' => $request->input('user_id')
        ];

        // Guardar los datos en la base de datos
        // ...

        // Guardar la imagen en el almacenamiento de Firebase
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images');

            // Obtener la URL de la imagen almacenada en Firebase
            $imageUrl = FirebaseStorage::put($imagePath, $image);

            // Asociar la URL de la imagen al post y guardar los cambios
            $post = new Post;
            $post->title = $datos['title'];
            $post->body = $datos['body'];
            $post->category_id = $datos['category_id'];
            $post->user_id = $datos['user_id'];
            $post->image = $imageUrl;
            $post->save();
        }

        // Redireccionar a la página de éxito o mostrar un mensaje de éxito
        return redirect()->route('posts.index')->with('success', 'Registro creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
