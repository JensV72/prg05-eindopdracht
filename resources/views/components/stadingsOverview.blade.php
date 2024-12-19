<div class="col-span-2 bg-white rounded-lg shadow p-6 dark:bg-gray-800">
    <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Standing</h2>
    <div class="overflow-x-auto mt-4">
        <div class="overflow-hidden rounded-lg">
            <table class="table-auto w-full border-collapse border border-gray-200 dark:border-gray-700">
                <thead class="bg-gray-200 dark:bg-gray-700">
                <tr>
                    <th class="px-3 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300 rounded-tl-lg"></th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300">Team</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300">P</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300">W</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300">D</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300">L</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300">GS</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300">GD</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600 dark:text-gray-300 rounded-tr-lg">PTS</th>
                </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800">
                @foreach($teams as $team)
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-3 py-2 text-sm font-semibold text-gray-800 bg-gray-100 dark:text-gray-300 dark:bg-gray-900">{{$loop->iteration}}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{$team->team}}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{$team->played}}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{$team->wins}}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{$team->draws}}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{$team->losses}}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{$team->goals_scored}}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{$team->goal_difference}}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{$team->points}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
