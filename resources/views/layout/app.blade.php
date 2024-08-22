<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


<body class="antialiased text-gray-800 dark:text-dark-2">
    <div class="min-h-screen dark:bg-page-700 bg-page-50 p-0 m-0">



        <x-layout.navbar></x-layout.navbar>

        {{ $slot }}

        <x-layout.footer></x-layout.footer>
    </div>
</body>

</html>
