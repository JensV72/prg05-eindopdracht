<x-layout title="Playerdetails">
    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
            <!-- Player Section: Image on the Left, Details on the Right -->
            <div class="flex flex-col sm:flex-row">
                <!-- Player Image -->
                <div class="sm:w-1/3 flex items-center justify-center p-4 bg-gray-100 dark:bg-gray-700">
                    <img class="w-32 h-32 rounded-full object-cover" src="{{Vite::asset("resources/images/Cristiaan_ronaldo.png")}}" alt="{{ $player->firstname }}">
                </div>

                <!-- Player Details -->
                <div class="sm:w-2/3 p-6">
                    <!-- Header with Player Name and Position -->
                    <div class="pb-4 border-b border-gray-300 dark:border-gray-600">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">{{ $player->firstname }} {{ $player->lastname }}</h1>
                        <p class="text-gray-600 dark:text-gray-400">
                            Position: {{ $player->position->name }}
                        </p>
                    </div>

                    <!-- Player Stats -->
                    <div class="mt-4">
                        <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-3">Statistics</h2>
                        <div class="flex items-center mb-2">
                            <span class="w-1/2 text-gray-600 dark:text-gray-400">Goals:</span>
                            <span class="w-1/2 text-gray-800 dark:text-white font-semibold">{{ $player->goals }}</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <span class="w-1/2 text-gray-600 dark:text-gray-400">Assists:</span>
                            <span class="w-1/2 text-gray-800 dark:text-white font-semibold">{{ $player->assist }}</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-1/2 text-gray-600 dark:text-gray-400">Position:</span>
                            <span class="w-1/2 text-gray-800 dark:text-white font-semibold">{{ $player->position->name }}</span>
                        </div>
                    </div>

                    <!-- Optional Action Buttons -->
                    <div class="mt-6 flex justify-between">
                        <a href="{{ route('players.index') }}" class="text-indigo-500 hover:text-indigo-700 font-semibold">Back to Players</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
