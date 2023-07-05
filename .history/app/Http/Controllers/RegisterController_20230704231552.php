<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use 

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.register');
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
        //Modificar el request
        $request->request->add([
            'username' => Str::slug($request->get('username')),]);

        // Validación
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|min:3|max:20|unique:users,username', // unique:users,username
            'email' => 'required|email|unique:users,email|max:60', // unique:users,email
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make( $request->get('password'))
        ]);

        // Autenticar al usuario
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        // Otra forma de autenticar al usuario
        auth()->attempt($request->only('email', 'password'));

        // Redireccionar
        return redirect()->route('posts.index');
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
