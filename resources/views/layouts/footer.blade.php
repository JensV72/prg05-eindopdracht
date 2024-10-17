

<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{Vite::asset("resources/images/Team_fainort_logo.png")}}" class="h-16 max-h-16 " alt="logo team fainort" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Fainort</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{route('home')}}" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="{{route('players.index')}}" class="hover:underline me-4 md:me-6">Team</a>
                </li>
                @if(Route::has('login'))
                    @auth
                        <li>
                        <a href="{{url('/dashboard')}}" class="hover:underline me-4 md:me-6">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="{{route('login')}}" class="hover:underline me-4 md:me-6">Log in</a>
                        </li>
                        @if(Route::has('register'))
                            <li>
                                <a href="{{route('register')}}" class="hover:underline">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif

            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="{{route("home")}}" class="hover:underline">Fainort™</a>. All Rights Reserved.</span>
    </div>
</footer>

