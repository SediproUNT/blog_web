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
        // return $request->all();




        // Validar y guardar los datos del post en la base de datos

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'firebase');
            $imageUrl = Storage::disk('firebase')->url($imagePath);

            // Asociar la URL de la imagen al post y guardar los cambios
        }




        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images', 'firebase');
        //     $imageUrl = Storage::disk('firebase')->url($imagePath);
        // }

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id; // or auth()->id()
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
