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
Route::get('/albums',[AlbumController::class,'index'])->name('album.index');
Route::post('/albums',[AlbumController::class,'store'])->name('album.store');
Route::get('/albums/create',[AlbumController::class,'create'])->name('album.create');
Route::get('/albums/{id}', [AlbumController::class,'show'])->name('album.show');
Route::put("/albums/{id}", [AlbumController::class, "update"])->name("album.update");
Route::delete("/albums/{id}", [AlbumController::class, "destroy"])->name("album.delete");
Route::get("/albums/{id}/edit", [AlbumController::class, "edit"])->name("album.edit");
