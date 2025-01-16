<header
    x-data="{
        open: false,
    }"
    async init() {
        await $nextTick()
    }
>
    <nav aria-label="Main Navigation">
        <div class="w-full mx-auto hidden lg:flex lg:justify-between items-center gap-6 capitalize px-6">

            <a href="/" class="my-6 flex">
                <span class="font-bold uppercase">Startr 2025</span>
            </a>

            <div class="flex space-x-6">
                <x-main-link href="#">
                    {{ __('Products') }}
                </x-main-link>
                <x-main-link href="#">
                    {{ __('Services') }}
                </x-main-link>
                <x-main-link :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-main-link>
            </div>

            <div class="flex space-x-6">
                <button @click="$store.darkMode.toggle()">
                    <x-icons.dark-theme class="w-6 h-6 text-gray-500 dark:text-gray-200 transition-colors" />
                </button>
                <a href="/login" class="ml-auto" title="Login to your account">Login</a>
                <a href="/register" title="Create a new account">Register</a>
            </div>
        </div>
        <div class="w-full lg:hidden bg-white lg:max-w-5xl mx-auto font-medium">
            <div class="flex justify-between p-4">
                <a href="/" class="flex items-center">
                    <span class="font-bold uppercase">Startr 2025</span>
                </a>
                <button class="ml-auto mr-4" @click="$store.darkMode.toggle()">
                    <x-icons.dark-theme class="w-6 h-6 text-gray-500 dark:text-gray-200 transition-colors" />
                </button>
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
                class="bg-sky-400 fixed inset-x-0 z-10 p-4 bg-white rounded-lg shadow-lg mx-auto md:hidden flex flex-col"
            >
                <h2 class="sr-only">Mobile Menu</h2>
                <div class="flex flex-col text-lg space-y-1">
                    <x-main-link href="#">
                        {{ __('Products') }}
                    </x-main-link>
                    <x-main-link href="#">
                        {{ __('Services') }}
                    </x-main-link>
                    <x-main-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-main-link>
                </div>
                <span class="inline-flex self-center items-center text-sm py-4 divide-x space-x-2 text-gray-600">
                    <a href="/login" class="transition-colors hover:text-gray-800" title="Login to your account">Login</a>
                    <a href="/register" class="pl-2 transition-colors hover:text-sky-800 text-sky-700" title="Create a new account">Register</a>
                </span>
            </div>
        </div>
    </nav>
</header>
