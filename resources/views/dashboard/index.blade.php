<x-layout title="Dashboard">
    <div class="py-6 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            @include('components.standingsOverview')

            <!-- Next Game Section -->
            <a href="{{ route('dashboard.overview', ['title' => 'Fixtures','name'=>'fixtures']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800 flex flex-col h-full">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">
                    Fixtures
                </h2>
                <div class="flex flex-col justify-start items-center mt-11">
                    @if ($next_game)
                        <div class="text-center">
                            <!-- Align the date container -->
                            <div class="text-xl font-bold text-gray-900 dark:text-white">
                                {{\Carbon\Carbon::createFromTimestampMs($next_game->game_date)->format('F j')}}
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
                                {{ \Carbon\Carbon::createFromTimestampMs($next_game->game_date)->format('g:i A') }}
                            </div>
                            <div class="text-l text-gray-600 dark:text-gray-300 mt-2">
                                Pitch {{$next_game->pitch}}
                            </div>
                        </div>
                    @else
                        <p class="text-red-500 text-center">No upcoming games found.</p>
                    @endif
                </div>
            </a>

            <!-- Results Section -->
            <a href="{{ route('dashboard.overview', ['title' => 'Results','name'=>'results']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800 flex flex-col h-full">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">
                    Results
                </h2>
                <div class="flex flex-col justify-start items-center mt-11">
                    @if ($last_game)
                        <!-- Align the date container -->
                        <div class="text-xl font-bold text-gray-900 dark:text-white">
                            {{\Carbon\Carbon::createFromTimestampMs($last_game->game_date)->format('F j')}}
                        </div>
                        <div class="flex justify-center items-center space-x-4 mt-2">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white">
                                {{ $last_game->team }}
                            </div>
                            <div class="text-2xl font-bold text-gray-900 dark:text-white">
                                -
                            </div>
                            <div class="text-2xl font-bold text-gray-900 dark:text-white">
                                {{ $last_game->opponent }}
                            </div>
                        </div>
                        <div class="flex justify-center items-center space-x-4 mt-2">
                            <div class="text-xl text-gray-600 dark:text-gray-300">
                                {{$last_game->result_team}}
                            </div>
                            <div class="text-xl text-gray-600 dark:text-gray-300">
                                -
                            </div>
                            <div class="text-xl text-gray-600 dark:text-gray-300">
                                {{$last_game->result_opponent}}
                            </div>
                        </div>
                    @else
                        <p class="text-red-500 text-center">No game results found.</p>
                    @endif
                </div>
            </a>

            <!-- Admin Section -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-6">

                <!-- Users Overview Section -->
                <a href="{{ route('dashboard.overview', ['title' => 'Users Overview','name'=>'user']) }}" class="bg-white rounded-lg shadow p-4 dark:bg-gray-800 flex flex-col items-center justify-center">
                    <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Users Overview</h2>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$users->count()}}</p>
                </a>

                <!-- Games Overview Section -->
                <a href="{{ route('dashboard.overview', ['title' => 'Games Overview','name'=>'game']) }}" class="bg-white rounded-lg shadow p-4 dark:bg-gray-800 flex flex-col items-center justify-center">
                    <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Games Overview</h2>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$games->count()}}</p>
                </a>

                <!-- Players Overview Section -->
                <a href="{{ route('dashboard.overview', ['title' => 'Players Overview','name'=>'player']) }}" class="bg-white rounded-lg shadow p-4 dark:bg-gray-800 flex flex-col items-center justify-center">
                    <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Players Overview</h2>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$players->count()}}</p>
                </a>

                <!-- Teams Overview Section -->
                <a href="{{ route('dashboard.overview', ['title' => 'Teams Overview','name'=>'team']) }}" class="bg-white rounded-lg shadow p-4 dark:bg-gray-800 flex flex-col items-center justify-center">
                    <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Teams Overview</h2>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$teams->count()}}</p>
                </a>

                <!-- Create New Player -->
                <a href="{{route('players.create')}}" class="bg-white rounded-lg shadow p-4 dark:bg-gray-800 flex flex-col items-center justify-center">
                    <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Create New Player</h2>
                    <img
                        class="w-8 h-8 object-contain mt-3"
                        src="{{ Vite::asset('resources/images/plusIcon.png') }}"
                        alt="Player Create Icon"
                    />
                </a>

                <!-- Create New Team -->
                <a href="{{route('teams.create')}}" class="bg-white rounded-lg shadow p-4 dark:bg-gray-800 flex flex-col items-center justify-center">
                    <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Create New Team</h2>
                    <img
                        class="w-8 h-8 object-contain mt-3"
                        src="{{ Vite::asset('resources/images/plusIcon.png') }}"
                        alt="Team Create Icon"
                    />
                </a>

                <!-- Create New Game -->
                <a href="{{route('games.create')}}" class="bg-white rounded-lg shadow p-4 dark:bg-gray-800 flex flex-col items-center justify-center">
                    <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Create New Game</h2>
                    <img
                        class="w-8 h-8 object-contain mt-3"
                        src="{{ Vite::asset('resources/images/plusIcon.png') }}"
                        alt="Game Create Icon"
                    />
                </a>

            </div>

        </div>
    </div>
</x-layout>
