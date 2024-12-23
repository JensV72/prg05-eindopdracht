<x-layout title="Dashboard">
    <div class="py-6 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            @include('components.standingsOverview')

            <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Next game</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">1974</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Results</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">287</p>
            </div>


            <a href="{{ route('dashboard.overview', ['title' => 'Player Overview','name'=>'player']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Player overview</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$players->count()}}</p>
            </a>

            <a href="{{ route('dashboard.overview', ['title' => 'User Overview','name'=>'user']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">User overview</h2>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{$users->count()}}</p>
            </a>

            <a href="{{ route('dashboard.overview', ['title' => 'Team Overview','name'=>'team']) }}" class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                <h2 class="text-gray-600 dark:text-gray-300 text-sm font-semibold">Teams overview</h2>
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
        </div>
    </div>
</x-layout>
