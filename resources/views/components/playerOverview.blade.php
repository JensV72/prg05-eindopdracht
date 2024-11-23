<div class="mt-6">
    <h2 class="text-2xl font-bold text-gray-900">Player Overview</h2>
    <p class="text-gray-400 text-sm mt-1">A comprehensive list of all players, their stats, and positions.</p>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-300 dark:text-gray-100 bg-gray-800">
            <thead class="text-xs uppercase bg-gray-700 text-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">User ID</th>
                <th scope="col" class="px-6 py-3">First Name</th>
                <th scope="col" class="px-6 py-3">Last Name</th>
                <th scope="col" class="px-6 py-3">Position</th>
                <th scope="col" class="px-6 py-3">Goals</th>
                <th scope="col" class="px-6 py-3">Assists</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($players as $player)
                <tr class="bg-gray-800 border-b border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">{{ $player->id }}</td>
                    <td class="px-6 py-4">{{ $player->user_id }}</td>
                    <td class="px-6 py-4">{{ $player->firstname }}</td>
                    <td class="px-6 py-4">{{ $player->lastname }}</td>
                    <td class="px-6 py-4">{{ $player->position->name }}</td>
                    <td class="px-6 py-4">{{ $player->goals }}</td>
                    <td class="px-6 py-4">{{ $player->assist }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('players.edit', $player) }}"
                           class="text-blue-400 hover:underline">Edit</a> |
                        <form method="POST" action="{{ route('players.destroy', $player) }}" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-red-400 hover:underline"
                                    onclick="return confirm('Are you sure you want to delete this player?');">
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
