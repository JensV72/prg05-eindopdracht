<div class="mt-6">
    <p class="text-gray-400 text-sm mt-1">A comprehensive list of all games and their stats.</p>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-300 dark:text-gray-100 bg-gray-800">
            <thead class="text-xs uppercase bg-gray-700 text-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Team</th>
                <th scope="col" class="px-6 py-3">Team Results</th>
                <th scope="col" class="px-6 py-3">Opponents</th>
                <th scope="col" class="px-6 py-3">Opponents Results</th>
                <th scope="col" class="px-6 py-3">Game Dates</th>
                <th scope="col" class="px-6 py-3">Pitch</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr class="bg-gray-800 border-b border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">{{ $game->id }}</td>
                    <td class="px-6 py-4">{{ $game->team }}</td>
                    <td class="px-6 py-4">{{ $game->result_team }}</td>
                    <td class="px-6 py-4">{{ $game->opponent }}</td>
                    <td class="px-6 py-4">{{ $game->result_opponent }}</td>
                    <td class="px-6 py-4">{{ Carbon\Carbon::createFromTimestampMs($game->game_date)->format('F j, Y g:i A')}}</td>
                    <td class="px-6 py-4">{{ $game->pitch }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('games.edit', $game) }}"
                           class="text-blue-400 hover:underline">Edit</a> |
                        <form method="POST" action="{{ route('games.destroy', $game) }}" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-red-400 hover:underline"
                                    onclick="return confirm('Are you sure you want to delete this game?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
