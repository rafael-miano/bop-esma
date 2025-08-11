<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans h-screen overflow-hidden">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 relative h-full">
        <!-- Background SVG -->
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
            src="https://laravel.com/assets/img/welcome/background.svg" alt="Background" />

        <!-- Page Wrapper -->
        <div class="relative min-h-screen flex flex-col selection:bg-[#FF2D20] selection:text-white">

            <!-- Content Container (flex-grow pushes footer down) -->
            <div class="flex-grow flex items-center justify-center w-full px-6">
                <div class="w-full max-w-2xl lg:max-w-7xl text-center flex flex-col items-center justify-center">
                    <!-- Centered Header -->
                    <header class="flex flex-col items-center gap-4 py-6">
                        <img src="{{ asset('images/AIA.svg') }}" alt="AIA Logo" class="w-24 h-24">
                        <h2 class="text-lg font-semibold text-black dark:text-white">Cebu Esma District</h2>
                    </header>

                    <!-- Main Content -->
                    <main>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </main>
                </div>
            </div>

            <!-- Footer at bottom -->
            <footer class="py-8 text-center text-sm text-black dark:text-white/70">
                &copy; {{ date('Y') }} AIA Philippines. All rights reserved.
            </footer>
        </div>
    </div>
</body>

</html>
