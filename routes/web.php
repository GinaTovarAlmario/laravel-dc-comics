<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class,'home'])->name('home');

// rotte per gli albums
Route::get('/albums',[AlbumController::class,'index'])->name('albums.index');
Route::get('/albums/create',[AlbumController::class,'create'])->name('album.create');
Route::get('/albums/{album}', [AlbumController::class,'show'])->name('albums.show');
