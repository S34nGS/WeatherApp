<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherApi;
use App\Http\Controllers\SavedLocationController;

Route::get('/', [WeatherApi::class, 'fetchData'])->name('weather.fetch');
// Route::get('/', function() {
//     return view('weather');
// })->name('weather.fetch');

Route::get('/testing', function() {
    return view('testing');
})->name('testing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::post('/saved-locations', [SavedLocationController::class, 'store'])->name('savedLocation.store');
    Route::get('/saved-locations', [SavedLocationController::class, 'index'])->name('savedLocation.index');
    Route::delete('/saved-locations/{id}', [SavedLocationController::class, 'destroy'])->name('savedLocation.destroy');
});

require __DIR__.'/auth.php';
