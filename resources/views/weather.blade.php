<x-layout>

    {{-- Search form and button for the city to display --}}
    <div class="flex">
        <form action="{{route('weather.fetch')}}" method="GET" class="flex gap-4">
            <input type="text" id="location" name="location" placeholder="Location" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                Check
            </button>
        </form>
    </div>


    {{-- Displayed weather data for the city --}}
    @if(isset($data))
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3">Attribute</th>
                <th scope="col" class="px-6 py-3">Value</th>
            </thead>
            
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Location</th>
                    <td class="px-6 py-4">{{ $data['location']['name'] }}</td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Country</th>
                    <td class="px-6 py-4">{{ $data['location']['country'] }}</td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Temperature (°C)</th>
                    <td class="px-6 py-4">{{ $data['current']['temp_c'] }}</td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Condition</th>
                    <td id="weather-condition" data-condition="{{ $data['current']['condition']['text'] }}" class="px-6 py-4">{{ $data['current']['condition']['text'] }}</td>
                </tr>
            </tbody>
        </table>

        {{-- Display an image based on the weather conditions --}}
        <div id="weathericon">
        </div>
    </div>
    @endif

    
    {{-- Script for dynamically displaying an image based on the weather condition --}}
    @vite('resources/js/app.js')
    
</x-layout>
