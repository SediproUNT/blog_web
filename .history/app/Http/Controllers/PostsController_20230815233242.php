<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Factory;



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
        // return $request->all();

        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');

        // Cargar las credenciales de Firebase desde un archivo JSON (asegúrate de tener la ruta correcta)
        $serviceAccount = ServiceAccount::fromJsonFile('/path/to/serviceAccountCredentials.json');

        // Crear una instancia de Firebase Factory
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        // Configurar el servicio de almacenamiento de Firebase
        $storage = $firebase->getStorage();

        // Obtener una referencia al bucket de Firebase Storage
        $bucket = $storage->getBucket();

        // Definir la ruta deseada de almacenamiento en Firebase Storage
        $storagePath = 'post_images/';

        // Generar un nombre único para el archivo
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();

        // Subir el archivo a Firebase Storage
        $bucket->upload(
            file_get_contents($image->getRealPath()),
            [
                'name' => $storagePath . $filename,
            ]
        );

        // Obtener la URL de descarga del archivo subido
        $downloadUrl = $bucket->object($storagePath . $filename)->signedUrl(now()->addMinutes(15));

        // Crear el post en la base de datos
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->image_url = $downloadUrl;
        $post->save();

        return redirect(route('posts.index'));
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
