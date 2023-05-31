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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
       <div class="container-fluid  bg-gray-100 dark:bg-gray-900 h-screen">
        <div class="grid grid-cols-2 h-full">
            <div class=" col-span-1 self-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
                    <a href="/" class="flex justify-center">
                        <img src="https://jasawebsite.biz/wp-content/uploads/2021/08/New-Project.png" alt="">
                 </a>
            </div>
             <div class="col-span-1 self-center px-32">
                 <div class=" px-6 py-7  self-center bg-gradient-to-b from-gray-800  shadow-md  sm:rounded-lg">
                     {{ $slot }}
                    </div>
                </div>
        </div>
        </div>
    </body>
</html>
