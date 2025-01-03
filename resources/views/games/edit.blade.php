<x-layout title="Edit">
    <div class="max-w-md mx-auto mt-6">
        <!-- Title centered above the form -->
        <h1 class="text-3xl font-bold text-gray-800 text-center">Edit game: {{$game->team}} - {{$game->opponent}}</h1>
        <p class="text-sm text-gray-500 text-center mb-6">Fill out the form below to change information about the game.</p>

        <!-- Form with thin outline and no dark background -->
        <form method="POST" action="{{ route('games.update', $game->id) }}"
              class="p-6 border border-gray-300 rounded-lg bg-white shadow-sm">
            @csrf
            @method('PATCH')
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="opponent" id="opponent"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$game->opponent}}"
                           required />
                    <label for="opponent"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Opponent
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="result_team" id="result_team"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$game->result_team}}"
                            />
                    <label for="result_team"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Result Fainort
                    </label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="result_opponent" id="result_opponent"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$game->result_opponent}}"
                            />
                    <label for="result_opponent"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Result Opponent
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="datetime-local" name="game_date" id="game_date"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{\Carbon\Carbon::createFromTimestampMs($game->game_date)->format('Y-m-d\TH:i:s') }}"
                           required />
                    <label for="game_date"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Game Date
                    </label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="goals" id="floating_goals"
                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                               placeholder=" "
                               value="{{$game->pitch}}"
                               required />
                        <label for="goals"
                               class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Goals
                        </label>

                </div>
            </div>
            <div class="flex justify-between mt-6">
                <a href="{{route('dashboard.overview', ['title' => 'Games Overview','name'=>'game'])}}"
                   class="text-gray-700 border border-gray-300 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Cancel
                </a>
                <button type="submit"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-layout>
