<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/p/create', [PostsController::class, 'create']);
// static \Illuminate\Routing\Route get(string $uri, array|string|callable|null $action = null)
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/p', [PostsController::class, 'store']);
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
