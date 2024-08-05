{{-- Displayed weather data for the city --}}
@if(isset($data))
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
                    Location
                </th>
                <td class="px-6 py-4">
                    {{ $data['location']['name'] }}
                </td>
            </tr>

            <tr class="bg-blue-500 border-b border-blue-400">
                <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                    Country
                </th>
                <td class="px-6 py-4">
                    {{ $data['location']['country'] }}
                </td>
            </tr>

        </tbody>

    </table>

    {{-- Display an image based on the weather conditions --}}
    <div id="weathericon">
    </div>
</div>
@endif