<div class="bg-gray-800 py-2">
    <header class="grid grid-cols-2 items-center px-4">
        <div>

            <div class="py-1">
                <img src="https://raw.githubusercontent.com/hatsumiku03/jrd/refs/heads/test/weridoSpanishRitual/public/mikic.png" width="50px">
            </div>

        </div>

            @if (Route::has('login'))
                <nav class="flex items-stretch ml-auto">
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                                class="px-3 py-2 dark:text-white text-white"
                >
                    Dashboard
                </a>
                @else
                <a
                    href="{{ route('login') }}"
                    class="px-3 py-2 dark:text-white text-white"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                                    class="px-3 py-2 dark:text-white text-white"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>
</div>
</div>