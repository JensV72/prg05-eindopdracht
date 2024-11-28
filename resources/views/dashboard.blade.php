<x-layout title="Dashboard">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('components.playerOverview')
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route("players.create")}}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white" aria-current="page">Create new player</a>
                </div>
            @include('components.userOverview')
        </div>
    </div>

</x-layout>

