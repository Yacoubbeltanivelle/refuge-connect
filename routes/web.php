<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;


Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animaux')->group(function () {

    Route::get('/{id}', [AnimalController::class, 'show'])->name('animal.fiche');
});



Route::fallback(function () {
    return view('errors.not-found');
});
