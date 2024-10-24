<x-layout title="Team">
<div>
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
        Keepers</h1>
    <div class="flex">
        @include('components.keeper-card')
    </div>
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
    Defenders</h1>
    <div class="flex">
        @include('components.defender-card')
    </div>
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
        Midfielders</h1>
    <div class="flex">
        @include('components.midfielder-card')
    </div>
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
        Attackers</h1>
    <div class="flex">
        @include('components.attacker-card')
    </div>
</div>
</x-layout>

