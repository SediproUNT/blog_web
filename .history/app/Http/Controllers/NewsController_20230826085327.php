<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Logros;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $logros = Logros::all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);

        return view('components.blog.new', compact('posts', 'logros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::find($id);
        $recentPosts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $allPosts = Post::orderBy('created_at', 'desc')->get();

        // Encontrar IDs de posts anteriores y siguientes
        $currentIndex = $allPosts->pluck('id')->search($id);
        $previousPostId = $allPosts->get($currentIndex - 1)->id ?? null;
        $nextPostId = $allPosts->get($currentIndex + 1)->id ?? null;

        return view('components.blog.new-detalle', compact('post', 'recentPosts', 'allPosts', 'previousPostId', 'nextPostId'));

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
