<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;



class WeatherApiController extends Controller
{
    
    //Function for calling api info and saved locations per account
    public function fetchData(Request $request)
    {
        // $location = $request->query('location', 'Rotterdam');
        // $apiKey = env('WEATHERMAP_API_KEY');
        // $currentWeather = Http::get("http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$location}");

        // if ($currentWeather->successful()) {
        //     $weatherData = $currentWeather->json();

        //     $savedLocations = [];
        //     if (Auth::check()) {
        //         $savedLocations = Auth::user()->savedLocations;
        //     }

        //     return view('weather', [
        //         'weatherData'=> $weatherData,
        //         'savedLocations'=> $savedLocations
        //     ]);
        // }
        // else {
        //     abort(500, 'Api call was not succesful');
        // }

        $city = $request->query('city');
        $country = $request->query('country');
        $apiKey = env('WEATHERMAP_API_KEY');


        if (!$country) {
            $city = $request->query('city');
            $currentWeather = Http::get("http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$city}}");
        }elseif (!$city && $country){
            $city = 'Rotterdam';   // Set default city
            $country = 'Netherlands';  // Set default country
            $currentWeather = Http::get("http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$city},{$country}");
        } else{
            $city = $request->query('city');
            $country = $request->query('country');
            $currentWeather = Http::get("http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$city},{$country}");
        }
        
        $weatherData = $currentWeather->json();

        // Fetch the saved locations for the authenticated user
        $savedLocations = Auth::check() ? Auth::user()->savedLocations : [];



        if ($currentWeather->successful()) {
        $weatherData = $currentWeather->json();
        }else {
            abort(500, 'Api call was not succesful');
        }

        // Pass the weather data and saved locations to the view
        return view('weather', [
            'weatherData' => $weatherData,
            'savedLocations' => $savedLocations,
        ]);
    }
}
