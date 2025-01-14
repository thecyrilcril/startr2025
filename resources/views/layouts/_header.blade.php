<header
    x-data="{
        open: false,
    }"
    async init() {
        await $nextTick()
    }
>
    <nav aria-label="Main Navigation">
        <div class="w-full mx-auto hidden lg:flex items-center gap-4 capitalize px-6">
            <a href="/" class="my-6 flex items-center gap-4">
                <span class="font-bold uppercase">Startr 2025</span>
            </a>
            <a href="/login" class="ml-auto" title="Login to your account">Login</a>
            <a href="/register" title="Create a new account">Register</a>
        </div>
        <div class="w-full lg:hidden bg-white lg:max-w-5xl mx-auto font-medium">
            <div class="flex justify-between p-4">
                <a href="/" class="flex items-center">
                    <span class="font-bold uppercase">Startr 2025</span>
                </a>
                <div class="grid grid-rows-[1/-1] grid-cols-[1/-1]">
                    <button x-show="!open" @click="open = !open" aria-label="Open main menu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <x-icons.hamburger class="h-6 w-6" />
                    </button>
                    <button x-show="open" @click="open = !open" aria-label="Close main menu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <x-icons.close class="h-6 w-6" />
                    </button>
                </div>
            </div>
            <div
                x-show="open"
                @click.outside="open = false"
                x-transition.scale-y.origin.top
                class="bg-sky-400 fixed inset-x-0 z-10 p-6 bg-white rounded-lg shadow-lg mx-auto md:hidden flex flex-col text-center"
            >
                <h2 class="sr-only">Mobile Menu</h2>
                <span class="inline-flex self-center items-center text-sm divide-x space-x-1 text-gray-600">
                    <a href="/login" class="transition-colors hover:text-gray-800" title="Login to your account">Login</a>
                    <a href="/register" class="pl-1 transition-colors rounded hover:text-sky-800 text-sky-700" title="Create a new account">Register</a>
                </span>
            </div>
        </div>
    </nav>
</header>
