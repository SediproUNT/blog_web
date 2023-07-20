<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Agregamos el campo name
            // $table->string('username')->unique(); // Agregamos el campo username
            $table->string('apellidoP')->nullable();  // Agregamos el campo apellido
            $table->string('apellidoM')->nullable();  // Agregamos el campo apellido
            $table->string('email')->unique(); // Agregamos el campo email
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();     // Agregamos el campo password
            $table->string('provider')->nullable();     // Agregamos el campo provider
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
