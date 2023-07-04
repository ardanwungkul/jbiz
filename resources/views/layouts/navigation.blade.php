<nav x-data="{ open: false }" class="z-20 bg-white dark:bg-transparent fixed w-full">
    <!-- Primary Navigation Menu -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex justify-between w-full">
                <!-- Logo -->
                <div class="items-center w-48 overflow-auto">
                    <a href="{{ route('welcome') }}">
                        <div class="w-full h-full flex justify-center items-center">
                            <div class="logo">
                            </div>
                        </div>
                        {{-- <x-application-logo class=" align-middle " /> --}}
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="flex items-center">

                    @if (Auth::user() && Auth::user()->isAdmin == true)
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </div>
                    @else
                    @endif
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                            {{ __('Contact') }}
                        </x-nav-link>
                    </div>
                </div>


                @if (Auth::user())
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            data-dropdown-placement="bottom-end"
                            class=" inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400  hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                            type="button">
                            {{ auth::user()->name }}
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </div>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden rounded-lg divide-gray-100  text-left text-sm leading-5 text-gray-700 dark:text-gray-300 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 dark:bg-gray-800 bg-white border border-blue-900 dark:border-white ">
                        <ul class=" text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ route('profile.edit') }}"
                                    class="block py-2 dark:hover:bg-gray-600 rounded-lg dark:hover:text-white"
                                    style="padding-left: 16px; padding-right: 100px">Profile</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                            this.closest('form').submit();"
                                        class="block py-2 dark:hover:bg-gray-600 rounded-lg dark:hover:text-white"
                                        style="padding-left: 16px; padding-right: 100px">Logout</a>
                                </form>
                            </li>

                        </ul>
                    </div>
                @else
                    <x-nav-link :href="route('login')" class="hidden sm:flex sm:items-center sm:ml-6">
                        {{ __('Login') }}
                    </x-nav-link>
                @endif

                {{-- @if (Auth::user())
                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class=" inline-flex items-center px-3 py-2 border border-white text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400  hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <x-nav-link :href="route('login')" class="hidden sm:flex sm:items-center sm:ml-6">
                        {{ __('Login') }}
                    </x-nav-link>
                @endif --}}
            </div>



            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                class="dark:text-white text-blue-900 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex sm:hidden items-center"
                type="button">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Dropdown menu -->

            <div id="dropdownDivider"
                class="z-10 hidden bg-blue-900 divide-y divide-gray-100 shadow w-full dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                    @if (Auth::user())
                        <li>
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-gray-600 dark:hover:text-white">Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a onclick="event.preventDefault();
                            this.closest('form').submit();"
                                    href="{{ route('logout') }}"
                                    class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Logout</a>
                            </form>
                        </li>
                </ul>

                <div class="py-2 border-t border-gray-500">
                    <h2 class="block px-4 text-sm text-gray-200 ">
                        {{ auth::user()->name }}
                    </h2>
                    <h2 class="block px-4 text-sm text-gray-200 "> {{ auth::user()->email }}</h2>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Login
                </a>
                @endif
            </div>



            <!-- Hamburger -->
            {{-- <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    {{-- <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('About') }}
            </x-responsive-nav-link>
        </div> --}}



    {{-- @if (Auth::user()) --}}
    <!-- Responsive Settings Options -->
    {{-- <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
            <x-responsive-nav-link :href="route('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>
        @endif
    </div> --}}


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop()) {
                $("nav").addClass("gray");
            } else
                $("nav").removeClass("gray")
        })
    </script>
</nav>
