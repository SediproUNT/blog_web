<?php

namespace App\Http\Controllers;

use App\Models\Logros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $logros = Logros::all();

        return view('components.avsedipro.logros.index', compact('logros'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('components.avsedipro.logros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        S

        return redirect()->route('logros.index');
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
