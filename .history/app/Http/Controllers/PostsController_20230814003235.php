<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\UploadedFile;
// use Illuminate\Support\Str;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Storage;


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
        return $request->all();

        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        // // Validar y guardar los datos del post en la base de datos


        // $post = new Post;
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->category_id = $request->category_id;
        // $post->user_id = $request->user_id; // or auth()->id()
        // $post->save();

        // // Redirigir o mostrar una respuesta

        // return redirect(route('posts.index'));


        // Subir imagen a Firebase Storage
        $image = $request->file('image');
        $imageName = 'image_' . time() . '.' . $image->getClientOriginalExtension();

        $factory = (new Factory)
            ->withServiceAccount(ServiceAccount::fromJsonFile(config('firebase.credential_file')))
            ->create();

        $storage = $factory->getStorage();
        $bucket = $storage->getBucket();

        $bucket->upload(file_get_contents($image->getPathname()), [
            'name' => $imageName
        ]);

        // Obtener la URL firmada de la imagen
        $expires = now()->addMinutes(5);
        $imageUrl = $bucket->object($imageName)->signedUrl($expires);

        $photo = $request->file('photo');
        $filename = Str::random(20) . '.' . $photo->getClientOriginalExtension();
        Storage::disk('firebase')->putFileAs('photos', $photo, $filename);

        

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->photo = $filename;
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
