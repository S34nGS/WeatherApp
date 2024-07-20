<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class WeatherApi extends Controller
{
    
    public function fetchData(Request $request)
    {
        $location = $request->query('location', 'Rotterdam');
        $apiKey = env('WEATHERMAP_API_KEY');
        $currentWeather = Http::get("http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$location}");

        if ($currentWeather->successful()) {
            $data = $currentWeather->json();

            return (view('weather', ['data'=> $data]));
        }
        else {
            abort(500, 'Api call was not succesful');
        }
    }
}
