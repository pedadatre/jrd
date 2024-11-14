{{-- <div class="bg-gray-800 py-2">
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
</div> --}}


<nav class="p-5 bg-gray-800 shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
    <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="h-10 inline"
        src="https://raw.githubusercontent.com/hatsumiku03/jrd/refs/heads/test/weridoSpanishRitual/public/mikic.png" width="50px">
        PApp
    </span>

    <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
    </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        @auth
            
        <li class="mx-4 my-6 md:my-0">
            <a href="{{ url('/dashboard') }}" class="text-xl hover:text-gray-200 duration-200">Home</a>
        </li>

        @else

        <li class="mx-4 my-6 md:my-0">
            <a href="{{ url('/login') }}" class="text-xl hover:text-gray-200 duration-200">Log in</a>
        </li>

        <li class="mx-4 my-6 md:my-0">
            <a href="{{ url('/register') }}" class="text-xl hover:text-gray-200 duration-200">Register</a>
        </li>
        @endauth
    <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-gray-200 duration-500">Fechas</a>
    </li>
    @if (Auth::check() && Auth::user()->isAdmin)
        
    <li class="mx-4 my-6 md:my-0">
        <a href="/logout" class="text-xl hover:text-red-500 duration-500">Peñas</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-red-500 duration-500">Pagos</a>
    </li>
    @endif
    <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-gray-200 duration-500">About</a>
    </li>
<h2 class=""></h2>
    </ul>
</nav>


<script>
    function Menu(e){
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100'), list.classList.add('bg-gray-900')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'),list.classList.remove('bg-gray-900'))
    }
</script>
<script src="https://cdn.tailwindcss.com"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>