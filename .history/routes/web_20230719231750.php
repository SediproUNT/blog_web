<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfilesController;

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

Route::get('/', function () {
    return view('components.blog.index');
})->name('index');


Route::get('/crear-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/dashboard', function () {
    return view('components.dashboard.index');
})->name('dashboard');


Route::get('/nosotros', function () {
    return view('components.blog.nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('components.blog.contacto');
})->name('contacto');

Route::get('/evento', function () {
    return view('components.blog.evento');
})->name('evento');


// Route::resource('profiles', ProfilesController::class)->names('profiles');

Route::get('/profiles', [ProfilesController::class, 'index'])->name('profiles.index');
Route::get('/profiles/create', [ProfilesController::class, 'create'])->name('profiles.create');





