<?php

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

Route::get('/weather', [Api::class, 'fetchData'])->name('weather.fetch');
