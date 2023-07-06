<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('inicio', function () {
    return view('blog.index')->name('inicio');
});


Route::get('/crear-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');


Route::get('/nosotros', function () {
    return view('blog.nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('blog.contacto');
})->name('contacto');

Route::get('/evento', function () {
    return view('blog.evento');
})->name('evento');