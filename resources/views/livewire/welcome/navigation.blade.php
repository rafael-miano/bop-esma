<nav class="-mx-3 flex flex-1 justify-center">
    @auth
        <a href="{{ url('/dashboard') }}"
            class="inline-block rounded-md px-4 py-2 
           bg-white/30 dark:bg-white/10 
           backdrop-blur-md ring-1 ring-white/20 
           text-black dark:text-white 
           shadow-md 
           hover:bg-white/40 dark:hover:bg-white/20 
           hover:text-black/80 dark:hover:text-white 
           focus:outline-none 
           focus-visible:ring-2 focus-visible:ring-[#FF2D20] dark:focus-visible:ring-white 
           transition duration-150 ease-in-out">
            Dashboard
        </a>
    @else
        <a href="{{ route('login') }}"
            class="inline-block rounded-md px-4 py-2 
           bg-white/30 dark:bg-white/10 
           backdrop-blur-md ring-1 ring-white/20 
           text-black dark:text-white 
           shadow-md 
           hover:bg-white/40 dark:hover:bg-white/20 
           hover:text-black/80 dark:hover:text-white 
           focus:outline-none 
           focus-visible:ring-2 focus-visible:ring-[#FF2D20] dark:focus-visible:ring-white 
           transition duration-150 ease-in-out">
            Log in
        </a>


        {{-- @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Register
            </a>
        @endif --}}
    @endauth
</nav>
