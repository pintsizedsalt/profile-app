<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
// Display the list of profiles
Route::get('/profiles', [ProfileController::class, 'index'])->name('index');

// Show the form to create a new profile
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('create');

// Store the new profile
Route::post('/profiles', [ProfileController::class, 'store'])->name('store');

// Show a specific profile
Route::get('/profiles/{profile}', [ProfileController::class, 'show'])->name('show');

// Show the form to edit an existing profile
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('edit');

// Update a specific profile
Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->name('update');

// Delete a specific profile
Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->name('destroy');

