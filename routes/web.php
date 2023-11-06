<?php

use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\MoviesController;
use App\Http\Controllers\Dashboard\PlayMovieController;
use App\Livewire\Dashboard\Index;
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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/filmes', [MoviesController::class, 'index'])->name('movies');
Route::get('/login', Index::class)->name('login');

Route::get('/filmes/assistir/{id}', [PlayMovieController::class, 'index'])->name('movies.play')->middleware('check.movie.id');