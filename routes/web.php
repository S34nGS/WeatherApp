<?php

use App\Http\Controllers\WeatherApi;
use Illuminate\Support\Facades\Route;

Route::get('/', [WeatherApi::class, 'fetchData'])->name('weather.fetch');

Route::get('/testing', function() {
    return view('testing');
});