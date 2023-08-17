<?php

namespace App\Http\Controllers;

use App\Models\Convenios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $convenios = Convenios::all();

        return view('convenios.index', compact('convenios'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('convenios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('public/convenios');
            $validatedData['imagen'] = Storage::url($imagenPath);
        }

        Convenios::create($validatedData);

        return redirect()->route('convenios.index');
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
