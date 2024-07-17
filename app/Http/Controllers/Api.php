<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class Api extends Controller
{
    
    public function fetchData(Request $request)
    {
        $location = $request->query('location', 'Rotterdam');
        $apiKey = env('WEATHERMAP_API_KEY');
        $response = Http::get("http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$location}");

        if ($response->successful()) {
            $data = $response->json();

            return (view('weather', ['data'=> $data]));
        }
        else {
            abort(500, 'Api call was not succesful');
        }
    }
}
