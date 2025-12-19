<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;


Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animaux')->group(function () {

    Route::get('/create', [AnimalController::class, 'create'])->name('animal.create');
    Route::get('/{id}/update', [AnimalController::class, 'update'])->name('animal.update');
    Route::get('/{id}/delete', [AnimalController::class, 'delete'])->name('animal.delete');

    Route::get('/{id}', [AnimalController::class, 'show'])->name('animal.fiche');
});



Route::fallback(function () {
    return view('errors.not-found');
});
