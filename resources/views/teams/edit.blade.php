<x-layout title="edit">
    <div class="max-w-md mx-auto mt-6">
        <!-- Title centered above the form -->
        <h1 class="text-3xl font-bold text-gray-800 text-center">Edit team: {{$team->team}}</h1>
        <p class="text-sm text-gray-500 text-center mb-6">Fill out the form below to change information about the team.</p>

        <!-- Form with thin outline and no dark background -->
        <form method="POST" action="{{ route('teams.update', $team->id) }}"
              class="p-6 border border-gray-300 rounded-lg bg-white shadow-sm">
            @csrf
            @method('PATCH')
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="team" id="team"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$team->team}}"
                           required />
                    <label for="team"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Team name
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="played" id="played"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$team->played}}"
                           required />
                    <label for="played"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Games Played
                    </label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="wins" id="wins"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$team->wins}}"
                           required />
                    <label for="wins"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Wins
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="draws" id="draws"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$team->draws}}"
                           required />
                    <label for="draws"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Draws
                    </label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="losses" id="losses"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$team->losses}}"
                           required />
                    <label for="losses"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Losses
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="goals_scored" id="goals_scored"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$team->goals_scored}}"
                           required />
                    <label for="goals_scored"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Goals Scored
                    </label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="goal_difference" id="goal_difference"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$team->goal_difference}}"
                           required />
                    <label for="goal_difference"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Goal Difference
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="points" id="points"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$team->points}}"
                           required />
                    <label for="points"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Points
                    </label>
                </div>
            </div>
            <div class="flex justify-between mt-6">
                <a href="{{route('dashboard.overview', ['title' => 'Teams Overview','name'=>'team'])}}"
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
