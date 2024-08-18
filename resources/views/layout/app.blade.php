<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased text-gray-800 dark:text-dark-2">
    <div class="min-h-screen dark:bg-slate-800 pt-32 bg-white">


        <x-layout.navbar></x-layout.navbar>

        {{ $slot }}

        <x-layout.footer></x-layout.footer>
    </div>
</body>

</html>
