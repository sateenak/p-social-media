<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('chat', function () {
    return view('chat', [
        'title' => 'chat'
    ]);
});
Route::resource('/', PostController::class)->middleware('auth');
Route::get('/feed', [PostController::class, 'index'])->middleware('auth');
Route::get('/profile', [UserController::class, 'index'])->middleware('auth');
Route::get('/form-login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/form-login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/form-register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/form-register', [RegisterController::class, 'store']);