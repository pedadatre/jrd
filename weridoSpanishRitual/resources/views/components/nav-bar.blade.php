<div class="bg-green-600">
    <header class="grid grid-cols-2 items-center gap-2 py-1 lg:grid-cols-3">
        <div>

            <div>
                <img src="https://raw.githubusercontent.com/hatsumiku03/jrd/refs/heads/test/weridoSpanishRitual/public/mikic.png" width="50px">
            </div>

        </div>

            @if (Route::has('login'))
                <nav class="flex flex-1 justify-end">
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 ring-1 dark:text-white dark:hover:text-white/dark:focus-visible:ring-white"
                >
                    Dashboard
                </a>
                @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 ring-1 dark:text-white dark:hover:text-white/dark:focus-visible:ring-white"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 ring-1 dark:text-white dark:hover:text-white/dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>
</div>
