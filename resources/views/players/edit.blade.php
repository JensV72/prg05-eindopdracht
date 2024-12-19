<x-layout title="Create">
    <div class="max-w-md mx-auto mt-6">
        <h1 class="text-3xl font-bold text-gray-800 text-center">Edit player: {{$player->firstname}} {{$player->lastname}}</h1>
        <p class="text-sm text-gray-500 text-center mb-6">Fill out the form below to change information about the player.</p>

        <form method="POST" action="/players/{{$player->id}}"
              class="p-6 border border-gray-300 rounded-lg bg-white shadow-sm">
            @csrf
            @method('PATCH')
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="firstname" id="firstname"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$player->firstname}}"
                           required/>
                    <label for="firstname"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        First name
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="lastname" id="lastname"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$player->lastname}}"
                           required />
                    <label for="lastname"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Last name
                    </label>
                </div>
            </div>
            <div class="pt-2 pb-3">
                <label for="position_id"
                       class="block mb-2 text-sm font-medium text-gray-900">
                    Select the player's position
                </label>
                <select id="position_id" name="position_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @foreach($positions as $position)
                    <option value="{{$position->id}}"@if($position->id === $player->position_id)selected @endif>
                        {{$position->name}}
                    </option>

                    @endforeach
                </select>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="goals" id="floating_goals"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$player->goals}}"
                           required />
                    <label for="goals"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Goals
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="assist" id="assist"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" "
                           value="{{$player->assist}}"
                           required />
                    <label for="assist"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Assists
                    </label>
                </div>
            </div>
            <div class="flex justify-between mt-6">
                <a href="{{ route('dashboard.overview', ['title' => 'Player Overview','name'=>'player']) }}"
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
