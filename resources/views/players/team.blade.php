<x-layout title="Team">
    <div class="container mx-auto py-8 px-4">
        <!-- Keepers Section -->
        <section class="mb-12">
            <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl dark:text-white mb-6 text-center">
                Keepers
            </h1>
            <div class="flex flex-wrap justify-center gap-6">
                @include('components.keeper-card')
            </div>
        </section>

        <!-- Defenders Section -->
        <section class="mb-12">
            <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl dark:text-white mb-6 text-center">
                Defenders
            </h1>
            <div class="flex flex-wrap justify-center gap-6">
                @include('components.defender-card')
            </div>
        </section>

        <!-- Midfielders Section -->
        <section class="mb-12">
            <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl dark:text-white mb-6 text-center">
                Midfielders
            </h1>
            <div class="flex flex-wrap justify-center gap-6">
                @include('components.midfielder-card')
            </div>
        </section>

        <!-- Attackers Section -->
        <section class="mb-12">
            <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl dark:text-white mb-6 text-center">
                Attackers
            </h1>
            <div class="flex flex-wrap justify-center gap-6">
                @include('components.attacker-card')
            </div>
        </section>
    </div>
</x-layout>
