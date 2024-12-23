<x-layout title="{{ $title }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6">
            <!-- Title -->
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight">
                {{ $title }}
            </h2>
        </div>

        <!-- Table Section -->
        <div class="mb-6">
            @include('components.' . $name . 'Overview')
        </div>

        <!-- Back Button -->
        <div class="flex justify-end">
            <a href="{{ route('dashboard') }}"
               class="inline-block px-6 py-3 bg-gray-800 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2 transition duration-150 ease-in-out dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Go Back to Dashboard
            </a>
        </div>

    </div>
</x-layout>
