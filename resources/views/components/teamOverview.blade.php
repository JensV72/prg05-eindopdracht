<div class="mt-6">
    <p class="text-gray-400 text-sm mt-1">A comprehensive list of all teams, their stats, and position.</p>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-300 dark:text-gray-100 bg-gray-800">
            <thead class="text-xs uppercase bg-gray-700 text-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Team</th>
                <th scope="col" class="px-6 py-3">Played</th>
                <th scope="col" class="px-6 py-3">Wins</th>
                <th scope="col" class="px-6 py-3">Draws</th>
                <th scope="col" class="px-6 py-3">Losses</th>
                <th scope="col" class="px-6 py-3">Goals Scored</th>
                <th scope="col" class="px-6 py-3">Goal difference</th>
                <th scope="col" class="px-6 py-3">Points</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sorted as $team)
                <tr class="bg-gray-800 border-b border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">{{ $team->id }}</td>
                    <td class="px-6 py-4">{{ $team->team }}</td>
                    <td class="px-6 py-4">{{ $team->played }}</td>
                    <td class="px-6 py-4">{{ $team->wins }}</td>
                    <td class="px-6 py-4">{{ $team->draws }}</td>
                    <td class="px-6 py-4">{{ $team->losses }}</td>
                    <td class="px-6 py-4">{{ $team->goals_scored }}</td>
                    <td class="px-6 py-4">{{ $team->goal_difference }}</td>
                    <td class="px-6 py-4">{{ $team->points }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('teams.edit', $team) }}"
                           class="text-blue-400 hover:underline">Edit</a> |
                        <form method="POST" action="{{ route('teams.destroy', $team) }}" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-red-400 hover:underline"
                                    onclick="return confirm('Are you sure you want to delete this team?');">
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
