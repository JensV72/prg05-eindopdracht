
@foreach ($defenders as $defender)

    @php
        $position = $positions->firstWhere('id', $defender['position_id']);
    @endphp

    <div class="max-w-sm bg-blue my-5 mx-2 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="{{Vite::asset("resources/images/Cristiaan_ronaldo.png")}}" alt="Player picture" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$defender['firstname']}} {{$defender['lastname']}}</h5>
            </a>
            <div>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Goals: {{$defender['goals']}}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Assist: {{$defender['assist']}}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Position: {{$position['name']}}</p>
            </div>
        </div>
    </div>


@endforeach

