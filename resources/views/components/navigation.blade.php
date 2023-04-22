{{--<x-splade-data default="{ open: false }">--}}
{{--    <nav class="bg-white border-b border-gray-100">--}}
{{--        <!-- Primary Navigation Menu -->--}}
{{--        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--            <div class="flex justify-between h-16">--}}
{{--                <div class="flex">--}}
{{--                    <!-- Logo -->--}}
{{--                    <div class="shrink-0 flex items-center">--}}
{{--                        <a href="{{ route('home') }}">--}}
{{--                            <x-application-mark class="block h-9 w-auto" />--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <!-- Navigation Links -->--}}
{{--                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
{{--                        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">--}}
{{--                            {{ __('Home') }}--}}
{{--                        </x-nav-link>--}}

{{--                        <x-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">--}}
{{--                            {{ __('Documentation') }}--}}
{{--                        </x-nav-link> <x-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">--}}
{{--                            {{ __('Documentation') }}--}}
{{--                        </x-nav-link> <x-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">--}}
{{--                            {{ __('Documentation') }}--}}
{{--                        </x-nav-link>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Hamburger -->--}}
{{--                <div class="-mr-2 flex items-center sm:hidden">--}}
{{--                    <button @click="data.open = ! data.open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">--}}
{{--                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                            <path v-bind:class="{'hidden': data.open, 'inline-flex': ! data.open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                            <path v-bind:class="{'hidden': ! data.open, 'inline-flex': data.open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Responsive Navigation Menu -->--}}
{{--        <div v-bind:class="{'block': data.open, 'hidden': ! data.open }" class="sm:hidden">--}}
{{--            <div class="pt-2 pb-3 space-y-1">--}}
{{--                <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">--}}
{{--                    {{ __('Home') }}--}}
{{--                </x-responsive-nav-link>--}}

{{--                <x-responsive-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">--}}
{{--                    {{ __('Documentation') }}--}}
{{--                </x-responsive-nav-link>--}}

{{--                <x-responsive-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">--}}
{{--                    {{ __('Documentation') }}--}}
{{--                </x-responsive-nav-link>--}}

{{--                <x-responsive-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">--}}
{{--                    {{ __('Documentation') }}--}}
{{--                </x-responsive-nav-link>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</x-splade-data>--}}



<div class="navbar bg-white 2xl:p-0 xl:pl-0 lg:pl-0 md:pl-0 sm:pl-5 pl-10 h-full">
    <div class="2xl:navbar-end xl:navbar-end lg:navbar-end md:navbar-end sm:navbar-start navbar-start">
        <div class="dropdown w-auto  rounded-md">
            <label tabindex="0" class="btn btn-info text-white md:hidden ">
                <svg  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content p-2 shadow bg-info rounded-box w-auto h-9/12 ">
                <li class="text-white bg-info font-semibold w-96"><a>FLIGHTS</a></li>
                <li class=" text-white bg-info font-semibold w-96"><a>HOTELS</a></li>
                <li class=" text-white bg-info font-semibold w-96"><a>FLIGHTS & HOTELS</a></li>
                <li class=" text-white bg-info font-semibold w-96"><a>OFFERS</a></li>
                <li class=" text-white bg-info font-semibold w-96"><a>VISA</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost normal-case text-xl" href="/"><img src="https://cloud-travel.co.uk/live_flight/frontend/assets/images/logo.png" class="h-12 object-cover" alt=""></a>
    </div>


    <div class="navbar-center hidden md:flex justify-between align-middle">
        <ul class="menu menu-horizontal px-5 flex justify-between align-middle">
            <li class="text-black font-semibold"><a>FLIGHTS</a></li>
            <li class=" text-black font-semibold"><a>HOTELS</a></li>
            <li class=" text-black font-semibold"><a>FLIGHTS & HOTELS</a></li>
            <li class=" text-black font-semibold"><a>OFFERS</a></li>
            <li class=" text-black font-semibold"><a>VISA</a></li>
        </ul>

        <div class=" flex flex-col justify-start align-middle 2xl:block xl:block  lg:block  md:hidden  ">
            <a href="">
                <h3 class="text-red-600 text-2xl font-semibold">0203 500 0000</h3>
                <h4 class=" text-gray-400 text-xs">24 hours a day / 7 days a week</h4>
            </a>
        </div>
    </div>


    <div class=" 2xl:navbar-start xl:navbar-start lg:navbar-start md:navbar-start sm:navbar-end navbar-end">

        <a href="" class="mr-5 ml-10 text-black 2xl:block xl:block lg:block md:block sm:block hidden">Support</a>
        <button  class="btn btn-sm btn-info text-white">Sign In</button>
    </div>
</div>
