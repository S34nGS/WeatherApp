<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $location = 'Rotterdam';
    $apiKey = '14ac00775cb76560a48806084b5394ef';

    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric");
    // $response = Http::get("https://api.openweathermap.org/data/2.5/forecast/daily?q={$location}&cnt=5&appid={$apiKey}&units=metric");

    dump($response->json());

    return view('welcome', [
        'currentWeather' => $response->json(),
    ]);
});
