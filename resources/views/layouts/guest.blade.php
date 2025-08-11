<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

@props(['noCard' => false])

<body class="antialiased font-sans h-screen overflow-hidden">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 relative h-full">
        <!-- Background Image -->
        <img class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg"
            alt="Background" />

        <!-- Page Container -->
        <div
            class="relative min-h-screen flex flex-col justify-between selection:bg-[#FF2D20] selection:text-white z-10">
            <!-- Header / Logo -->
            <div class="flex flex-col items-center w-full px-6 max-w-2xl lg:max-w-7xl mx-auto pt-10">
                <header class="flex flex-col items-center gap-4 lg:grid lg:grid-cols-3 lg:items-center lg:gap-2 w-full">
                    <div class="lg:col-start-2 flex flex-col items-center">
                        <img src="{{ asset('images/AIA.svg') }}" alt="AIA Logo" class="w-24 h-24">
                        <h2 class="text-lg font-semibold text-black dark:text-white text-center">
                            Cebu Esma District
                        </h2>
                    </div>
                </header>
            </div>

            <!-- Page Content -->
            <main class="flex-grow flex items-center justify-center px-4">
                @if ($noCard)
                    {{ $slot }}
                @else
                    <div
                        class="w-full sm:max-w-md px-6 py-4 bg-white/30 dark:bg-white/10 backdrop-blur-md ring-1 ring-white/20 shadow-md overflow-hidden sm:rounded-lg">
                        {{ $slot }}
                    </div>
                @endif
            </main>

            <!-- Footer -->
            <footer class="py-6 text-center text-sm text-black dark:text-white/70">
                &copy; {{ date('Y') }} AIA Philippines. All rights reserved.
            </footer>
        </div>
    </div>

    @livewireScripts
</body>

</html>
