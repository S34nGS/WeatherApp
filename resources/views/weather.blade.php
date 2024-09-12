<x-layout>

    <x-main.search-location></x-main.search-location>
    
    <x-side.sidebar-button></x-side.sidebar-button>
 
    <x-side.sidebar :savedLocations="$savedLocations"></x-side.sidebar>

    <x-side.add-location-modal></x-side.add-location-modal>

    {{-- Displayed weather data for the city --}}
    @if(isset($weatherData))
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
            <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">Attribute</th>
                    <th scope="col" class="px-6 py-3">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-blue-500 border-b border-blue-400">
                    <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                        location
                    </th>
                    <td class="px-6 py-4">
                        {{ $weatherData['location']['name'] }}
                    </td>
                </tr>
                <tr class="bg-blue-500 border-b border-blue-400">
                    <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                        Country
                    </th>
                    <td class="px-6 py-4">
                        {{ $weatherData['location']['country'] }}
                    </td>
                </tr>
                <tr class="bg-blue-500 border-b border-blue-400">
                    <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                        Temperature (°C)
                    </th>
                    <td class="px-6 py-4">
                        {{ $weatherData['current']['temp_c'] }}
                    </td>
                </tr>
                <tr class="bg-blue-500 border-b border-blue-400">
                    <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                        Condition
                    </th>
                    <td class="px-6 py-4">
                        {{ $weatherData['current']['condition']['text'] }}
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Display an image based on the weather conditions --}}
        <div id="weathericon">
        </div>
    </div>
    @endif    
    
</x-layout>
