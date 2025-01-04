<div class="bg-white dark:bg-gray-800 border border-gray-300 rounded-lg shadow-md overflow-hidden w-48 max-w-sm transition-transform duration-300 hover:scale-105">
    <a href="{{ route('players.show', $player->id) }}">
        <img class="w-full h-48 object-cover rounded-t-lg"
             src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->firstname }} {{ $player->lastname }}">
    </a>
    <div class="p-4 text-center">
        <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
            {{ $player->firstname }} {{ $player->lastname }}
        </h5>
    </div>
</div>
