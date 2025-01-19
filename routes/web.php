<?php

use App\Http\Controllers\PetaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/gempa', function () {
    return view('gempa.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/peta', [PetaController::class, 'index']);

Route::get('/populasi', [RegencyController::class, 'populasi']);
Route::get('/populasi/{province_id}', [RegencyController::class, 'populasiById']);

Route::get('/pernikahan', [RegencyController::class, 'pernikahan']);
Route::get('/pernikahan/{province_id}', [RegencyController::class, 'pernikahanById']);

Route::get('/perceraian', [RegencyController::class, 'perceraian']);
Route::get('/perceraian/{province_id}', [RegencyController::class, 'perceraianById']);

Route::get('/kelahiran', [RegencyController::class, 'kelahiran']);
Route::get('/kelahiran/{province_id}', [RegencyController::class, 'kelahiranById']);

require __DIR__.'/auth.php';
