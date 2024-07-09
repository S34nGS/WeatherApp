<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $location = 'Rotterdam';
    $apiKey = config('services.weather.key');

    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric");
    // $response = Http::get("https://api.openweathermap.org/data/2.5/forecast/daily?q={$location}&cnt=5&appid={$apiKey}&units=metric");

    dump($response->json());

    return view('welcome', [
        'currentWeather' => $response->json(),
    ]);
});
