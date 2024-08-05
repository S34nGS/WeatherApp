{{-- Search form and button for the city to display --}}
<div class="flex">
    <form action="{{route('weather.fetch')}}" method="GET" class="flex gap-4">
        <input type="text" id="location" name="location" placeholder="Location" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
            Check
        </button>
    </form>
</div>