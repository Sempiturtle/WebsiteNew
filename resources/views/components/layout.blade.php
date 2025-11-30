<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'App' }}</title>
</head>

<body class="min-h-screen h-full bg-gradient-to-r from-indigo-200 via-sky-300 to-emerald-450">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

            <!-- Dynamic Logo Link -->
            <a href="{{ auth()->check() ? route('dashboard') : url('/') }}"
               class="text-4xl font-black tracking-wide bg-gradient-to-r from-indigo-300 via-sky-400 to-emerald-300 bg-clip-text text-transparent drop-shadow-[0_2px_4px_rgba(0,0,0,0.25)] font-sans"
               style="font-family: 'Poppins', sans-serif;">
                My<span class="font-light">Website</span>
            </a>

            <!-- Links: show only if hideLinks is false -->
            @unless ($hideLinks ?? false)
                <div class="space-x-6 text-gray-700 text-lg">
                    <a href="/" class="hover:text-blue-500">Home</a>
                    <a href="{{ route('login') }}" class="hover:text-blue-500">Login</a>
                    <a href="{{ route('register') }}" class="hover:text-blue-500">Register</a>
                </div>
            @endunless
        </div>
    </nav>

    {{ $slot }}
</body>

</html>
