<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
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
// Rotte Public
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PublicController::class, 'contactSubmit'])->name('contact.submit');

// Rotte Movie
Route::get('/film', [MovieController::class, 'index'])->name('film.index');
Route::get('/film/{id}', [MovieController::class, 'show'])->name('film.show');
Route::get('/film/genre/{genre}', [MovieController::class, 'filterByGenre'])->name('film.genre');