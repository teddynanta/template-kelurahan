<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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
    return view('home');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/berita', [DashboardController::class, 'indexBerita'])->middleware('auth');

Route::get('/dashboard/berita/create', [DashboardController::class, 'createBerita'])->middleware('auth');

Route::get('/dashboard/berita/draft', [DashboardController::class, 'draftBerita'])->middleware('auth');

Route::get('/dashboard/berita/{id:id}', [DashboardController::class, 'showBerita'])->middleware('auth');

Route::post('/dashboard/posts', [PostController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);
