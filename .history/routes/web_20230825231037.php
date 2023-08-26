<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LogrosController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConveniosController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [BlogController::class, 'index'])->name('index');

Route::get('/nosotros', function () {
    return view('components.blog.nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('components.blog.contacto');
})->name('contacto');

Route::get('/evento', function () {
    return view('components.blog.evento');
})->name('evento');


Route::get('/crear-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/dashboard', function () {
    return view('components.dashboard.index');
})->name('dashboard');


// Todas las rutas aquí requerirán que el usuario esté autenticado
Route::resource('profiles', ProfilesController::class)->names('profiles');

Route::resource('posts', PostsController::class)->names('posts');

Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('logros', LogrosController::class)->names('logros');

Route::resource('convenios', ConveniosController::class)->names('convenios');

Route::resource('news', NewsController::class)->names('news');

Route::get('/posts/{id}', PostsController)->name('books.show');






// Route::get('/google-auth/redirect', function () {
//     return Socialite::driver('google')->redirect();
// });

// Route::get('/google-auth/callback', function () {
//     $user_google = Socialite::driver('google')->stateless()->user();

//     // $user = User::firstOrCreate([
//     //     'google_id' => $user_google->id,
//     // ], [
//     //     'email' => $user_google->email,
//     //     'name' => $user_google->name,
//     // ]);

//     $name = $user_google->name; // Supongamos que $user_google contiene el nombre completo

//     $words = explode(' ', $name); // Divide la cadena en un arreglo usando el espacio en blanco como delimitador

//     $firstWord = implode(' ', array_slice($words, 0, 2));

//     // $user = User::where('google_id', '=', $user_google->id)->first();

//     // $first_two_characters = substr($user->name, 0, 2);


//     $user = User::create([
//         'name' => $firstWord,
//         'email' => $user_google->email,
//         'google_id' => $user_google->id,
//         'photo' => $user_google->avatar,
//         'last_name' => $user_google->lastname,
//     ]);

//     Auth::login($user);

//     return redirect()->route('dashboard');
// });
