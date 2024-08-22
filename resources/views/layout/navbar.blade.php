{{-- ==== Navbar Section Start	==== --}}

<header x-data="{ navbarOpen: false }" class="fixed top-0 z-50 bg-page-500 w-full flex items-center shadow-md h-18">

    <div class="container w-full">
        <div class="flex items-center justify-between -mx-4">
            <div class="pr-4 w-80 max-w-full">
                <a href="/" class="flex items-center w-full py-2 ">
                    <img src="{{ url('img/logo3.png') }}" alt="logo" class="min-w-[60px] lg:min-w-[60px]">
                    {{-- <img src="{{ url('img/logo.png') }}" alt="logo"
                        class="min-w-[150px] lg:min-w-[200px] dark:inline-block hidden"> --}}
                    <span
                        class="text-[2rem] lg:text-4xl font-medium text-page-100 mx-4 pl-4 xs:pl-0 hidden  xs:inline-block">Jose
                        Pelayo</span>
                </a>
            </div>
            <div class="flex justify-end items-center w-full px-6">
                <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                    x-bind:class="navbarOpen && 'navbarTogglerActive'">
                </x-layout.navbar-hamburger>
                <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                    class="absolute left-0 top-[90%] bg-page-500 py-6 px-6 z-50 shadow rounded-lg w-[100svw] lg:px-0 lg:max-w-full lg:block lg:w-full lg:right-4 lg:static lg:shadow-none">

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
