<x-layout title="{{ $title }}"><
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

            <!-- Header Section -->
            <div class="flex items-center justify-between mb-6">
                <!-- Title -->
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight">
                    {{ $title }}
                </h2>

                <!-- Button (Top-Right Corner) -->
                <a href="{{ route('dashboard') }}"
                   class="inline-block px-6 py-3 bg-indigo-600 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                    Go Back to Dashboard
                </a>
            </div>
                @include('components.' . $name . 'Overview')

        </div>
</x-layout>
