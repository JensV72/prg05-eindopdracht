<x-layout title="Dashboard">
    <div class="py-6 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            @include('components.standingsOverview')
            <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Next game</h2>
                <div class="mt-2">
                    @if ($next_game)
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white">
                                {{$game_date}}
                            </div>
                            <div class="flex justify-center items-center space-x-4 mt-2">
                                <div class="text-2xl font-bold text-gray-900 dark:text-white">
                                    {{ $next_game->team }}
                                </div>
                                <div class="text-2xl font-bold text-gray-900 dark:text-white">
                                    -
                                </div>
                                <div class="text-2xl font-bold text-gray-900 dark:text-white">
                                    {{ $next_game->opponent }}
                                </div>
                            </div>
                            <div class="text-xl text-gray-600 dark:text-gray-300 mt-2">
                                {{ \Carbon\Carbon::parse($game_date)->format('g:i A') }}
                            </div>
                        </div>
                    @else
                        <p class="text-red-500">No upcoming games found.</p>
                    @endif
                </div>
            </div>


            <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Results</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2"></p>
            </div>


            <a href="{{ route('dashboard.overview', ['title' => 'Players Overview','name'=>'player']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Players overview</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$players->count()}}</p>
            </a>

            <a href="{{ route('dashboard.overview', ['title' => 'Users Overview','name'=>'user']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Users overview</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$users->count()}}</p>
            </a>

            <a href="{{ route('dashboard.overview', ['title' => 'Teams Overview','name'=>'team']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Teams overview</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$teams->count()}}</p>
            </a>

            <a href="{{ route('dashboard.overview', ['title' => 'Games Overview','name'=>'game']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">games overview</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$teams->count()}}</p>
            </a>

            <a href="{{route('players.create')}}" class="bg-white    rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Create new player</h2>
                <img
                    class=" w-8 h-8 object-contain mt-3"
                    src="{{ Vite::asset('resources/images/plusIcon.png') }}"
                    alt="Teamfoto"
                />
            </a>

            <a href="{{route('teams.create')}}" class="bg-white    rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Create new team</h2>
                <img
                    class=" w-8 h-8 object-contain mt-3"
                    src="{{ Vite::asset('resources/images/plusIcon.png') }}"
                    alt="Teamfoto"
                />
            </a>
        </div>
    </div>
</x-layout>
