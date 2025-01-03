<div class="mt-6">
    <p class="text-gray-400 text-sm mt-1">A comprehensive list of all the results.</p>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-300 dark:text-gray-100 bg-gray-800">
            <thead class="text-xs uppercase bg-gray-700 text-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3">Our team</th>
                <th scope="col" class="px-6 py-3"></th>
                <th scope="col" class="px-6 py-3"></th>
                <th scope="col" class="px-6 py-3"></th>
                <th scope="col" class="px-6 py-3">Opponent</th>
                <th scope="col" class="px-6 py-3">Game Dates</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr class="bg-gray-800 border-b border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">{{ $result->team }}</td>
                    <td class="px-6 py-4">{{ $result->result_team }}</td>
                    <td class="px-6 py-4">-</td>
                    <td class="px-6 py-4">{{ $result->result_opponent }}</td>
                    <td class="px-6 py-4">{{ $result->opponent }}</td>
                    <td class="px-6 py-4">{{ Carbon\Carbon::createFromTimestampMs($result->game_date)->format('F j, Y') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
