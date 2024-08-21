<a href="{{ $href }}" target="{{ $target }}"
    {{ $attributes->class([
        'py-4 px-6 md:px-9 lg:px-6 xl:px-9 2xl:px-12 rounded leading-normal border inline-block transition',
        'hover:bg-primary border-primary hover:text-white' => $variant === 'outline-primary',
        'hover:bg-red-700 hover:border-red-700 hover:text-white' => $variant === 'outline-red',
        'bg-[#0042AD] border-page-300 text-gray-50 hover:bg-page-300' => $variant === 'purple',
        'bg-page-700 border-gray-700 font-semibold text-dark-2 hover:bg-page-500' => $variant === 'dark',
        'bg-primary border-primary text-white hover:bg-primary/90' => $variant === 'primary',
    ]) }}">

    {{ $slot }}

</a>
