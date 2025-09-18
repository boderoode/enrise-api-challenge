<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jokes', [JokeController::class, 'index'])->name('jokes.index');
Route::get('/jokes/five', [JokeController::class, 'fiveJokes'])->name('jokes.five');
Route::get('/jokes/twelve', [JokeController::class, 'twelveJokes'])->name('jokes.twelve');