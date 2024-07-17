<x-layout>
    <div id="location-input">
        <form action="{{route('weather.fetch')}}" method="GET">
            <input type="text" id="location" name="location" placeholder="Location">
            <button type="submit">Check</button>
        </form>
    </div>

    <div id="weather-data">
        <table border="1">
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Location</td>
                <td>{{ $data['location']['name'] }}, {{ $data['location']['region'] }}, {{ $data['location']['country'] }}</td>
            </tr>
            <tr>
                <td>Temperature (°C)</td>
                <td>{{ $data['current']['temp_c'] }}</td>
            </tr>
        </table>
    </div>
    







    {{-- <script>
        var jsonData = @json($data);

        document.getElementById('weather-data').innerHTML = JSON.stringify(jsonData, null, 2);
    </script> --}}
</x-layout>
