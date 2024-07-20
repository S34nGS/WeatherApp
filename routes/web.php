<?php

use App\Http\Controllers\WeatherApi;
use Illuminate\Support\Facades\Route;

Route::get('/weather', [WeatherApi::class, 'fetchData'])->name('weather.fetch');
