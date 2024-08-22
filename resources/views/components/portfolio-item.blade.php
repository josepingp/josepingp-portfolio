<div x-data="{ categories: {{ json_encode($categories) }} }" :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden'"
    class="w-full md:w-1/2 xl:w-1/3 px-4">
    <div class="relative mb-12">
        <a href="{{ $url }}" target="_blank">
            <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
                <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-[260px] object-cover">
            </div>
        </a>
        <div
            class="text-center bg-white dark:bg-page-500 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[220px]">
            <span class="text-sm text-primary font-semibold block mb-2">
                {{ implode(', ', $categories) }}
            </span>
            <h3 class="font-bold text-xl text-dark dark:text-gray-2 mb-4">
                {{ $title }}
            </h3>
            <x-button-link :href="$url" variant="primary">Demo</x-button-link>
            <x-button-link :href="$url" variant="outline-primary">Repositorio</x-button-link>

        </div>
    </div>
</div>
