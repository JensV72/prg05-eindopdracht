<x-layout title="Team">
    <div class="container mx-auto py-8 px-4">
        <!-- Dropdown Filter Section -->
        <section class="w-full flex flex-col items-center mb-8">
            <x-dropdown width="48">
                <x-slot name="trigger">
                    <button class="inline-flex rounded-md px-4 py-2 text-sm bg-gray-800 font-medium text-gray-300 hover:bg-gray-700 hover:text-white focus:outline-none transition ease-in-out duration-150">
                        <div>Filter by Position</div>
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="{{ route('players.index') }}">
                        {{ __('All') }}
                    </x-dropdown-link>

                    @foreach ($positions as $position)
                        <x-dropdown-link href="{{ route('players.index', ['position_id' => $position->id]) }}">
                            {{ $position->name }}
                        </x-dropdown-link>
                    @endforeach
                </x-slot>
            </x-dropdown>
        </section>


        @if($selectedPosition)
            <section class="mb-12">
                <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl dark:text-white mb-6 text-center">
                    {{ $positions->firstWhere('id', $selectedPosition)->name }}
                </h1>
                <div class="flex flex-wrap justify-center gap-6">
                    @foreach ($players as $player)
                        @include("components.{$positions->firstWhere('id', $selectedPosition)->name}-card")
                    @endforeach
                </div>
            </section>
        @else
            @foreach ($positions as $position)
                <section class="mb-12">
                    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl dark:text-white mb-6 text-center">
                        {{ $position->name }}
                    </h1>
                    <div class="flex flex-wrap justify-center gap-6">
                        @foreach ($players->where('position_id', $position->id) as $player)
                            @include("components.{$position->name}-card")
                        @endforeach
                    </div>
                </section>
            @endforeach
        @endif
    </div>
</x-layout>
