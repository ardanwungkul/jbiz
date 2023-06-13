<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="w-full bg-gray-100 dark:bg-gray-900 h-screen">
        <div class="lg:grid lg:grid-cols-2 h-full">
            <div class=" col-span-1 self-center pt-6 bg-gray-100 dark:bg-gray-900 mb-5">
                <a href="/" class="flex justify-center">
                    <img class="w-56 lg:w-auto" src="https://jasawebsite.biz/wp-content/uploads/2021/08/New-Project.png"
                        alt="">
                </a>
            </div>
            <div class="lg:col-span-1 self-center lg:px-32 px-10 ">
                <div class=" px-6 py-7  self-center bg-gradient-to-b from-gray-800  shadow-md  rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('build/assets/app-e5a20cd9.js') }}"></script>

</html>
