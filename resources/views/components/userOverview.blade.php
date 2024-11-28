<div class="mt-6">
    <h2 class="text-2xl font-bold text-gray-900">User Overview</h2>
    <p class="text-gray-400 text-sm mt-1">A comprehensive list of all players, their stats, and positions.</p>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-300 dark:text-gray-100 bg-gray-800">
            <thead class="text-xs uppercase bg-gray-700 text-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Admin</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="bg-gray-800 border-b border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">{{ $user->id }}</td>
                    <td class="px-6 py-4">{{ $user->name }}</td>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">
                        @if($user->admin===1)Yes
                        @elseif($user->admin===0)No
                        @endif
                    </td>
{{--                    <td class="px-6 py-4">--}}
{{--                        <a href="{{ route('players.edit', $player) }}"--}}
{{--                           class="text-blue-400 hover:underline">Edit</a> |--}}
{{--                        <form method="POST" action="{{ route('players.destroy', $player) }}" class="inline-block">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit"--}}
{{--                                    class="text-red-400 hover:underline"--}}
{{--                                    onclick="return confirm('Are you sure you want to delete this player?');">--}}
{{--                                Delete--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>