<?php

use Illuminate\Support\Facades\Route;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfilesController;
use App\Models\User;

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

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


Route::resource('profiles', ProfilesController::class)->names('profiles');







Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();

    // $user = User::firstOrCreate([
    //     'google_id' => $user_google->id,
    // ], [
    //     'email' => $user_google->email,
    //     'name' => $user_google->name,
    // ]);

    $user = User::create([
        'name' => $user_google->name[0],
        'email' => $user_google->email,
        'google_id' => $user_google->id,
        'photo' => $user_google->avatar,
        'last_name' => $user_google->lastname,
    ]);

    Auth::login($user);

    return redirect()->route('dashboard');
    
});

