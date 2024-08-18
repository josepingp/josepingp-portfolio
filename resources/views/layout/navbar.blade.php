{{-- ==== Navbar Section Start	==== --}}

<header x-data="{ navbarOpen: false }"
    class="fixed left-0 top-0 z-50 bg-gray-200 w-full flex items-center shadow-md dark:bg-gray-700 h-32">

    <div class="container w-full">
        <div class="flex items-center justify-between -mx-4">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="flex items-center w-full py-2 ">
                    <img src="{{ url('img/logo.png') }}" alt="logo"
                        class="min-w-[150px] lg:min-w-[200px] xs:inline-block dark:hidden">
                    <img src="{{ url('img/logo.png') }}" alt="logo"
                        class="min-w-[150px] lg:min-w-[200px] dark:inline-block hidden">
                </a>
            </div>
            <div class="flex justify-end items-center w-full px-6">
                <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                    x-bind:class="navbarOpen && 'navbarTogglerActive'">
                </x-layout.navbar-hamburger>
                <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                    class="absolute left-0 top-[90%] bg-gray-200 py-6 px-6 z-50 shadow rounded-lg w-[100svw] dark:bg-gray-700 dark:text-[#d9d9d9] lg:px-0 lg:max-w-full lg:block lg:w-full lg:right-4 lg:static lg:shadow-none">

                    <ul class="block lg:flex lg:items-center justify-end ">
                        @foreach ($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">
                                {{ $item['label'] }}
                            </x-layout.navbar-item>
                        @endforeach

                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>
{{-- ==== Navbar Section End ==== --}}
