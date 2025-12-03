<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'App' }}</title>
</head>

<body class="min-h-screen h-full bg-gradient-to-r from-indigo-200 via-sky-300 to-emerald-450">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

            <!-- Dynamic Logo Link -->
            <a href="{{ auth()->check() ? route('dashboard') : url('/') }}"
                class="text-3xl sm:text-4xl font-black tracking-wide bg-gradient-to-r from-indigo-300 via-sky-400 to-emerald-300 bg-clip-text text-transparent drop-shadow font-sans"
                style="font-family: 'Poppins', sans-serif;">
                My<span class="font-light">Website</span>
            </a>

            <!-- Desktop Links -->
            @unless ($hideLinks ?? false)
                <div class="hidden md:flex space-x-8 text-gray-700 text-lg font-medium">
                    <a href="/" class="hover:text-blue-500 transition">Home</a>
                    <a href="{{ route('login') }}" class="hover:text-blue-500 transition">Login</a>
                    <a href="{{ route('register') }}" class="hover:text-blue-500 transition">Register</a>
                </div>
            @endunless

            <!-- Mobile Button -->
            <button id="navToggle" class="md:hidden text-gray-700 focus:outline-none">
                <svg id="navIcon" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        @unless ($hideLinks ?? false)
            <div id="mobileMenu" class="hidden md:hidden bg-white shadow-inner">
                <div class="px-4 py-4 flex flex-col space-y-4 text-gray-700 text-lg font-medium">
                    <a href="/" class="hover:text-blue-500 transition">Home</a>
                    <a href="{{ route('login') }}" class="hover:text-blue-500 transition">Login</a>
                    <a href="{{ route('register') }}" class="hover:text-blue-500 transition">Register</a>
                </div>
            </div>
        @endunless
    </nav>

    <!-- CONTENT -->
    <main class="min-h-[80vh]">
        {{ $slot }}
    </main>

    <!-- SIMPLE FOOTER -->
    <footer class="text-center py-6 text-gray-800 text-sm opacity-80">
        © {{ date('Y') }} MyWebsite — All rights reserved.
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        const navBtn = document.getElementById("navTo   ggle");
        const mobileMenu = document.getElementById("mobileMenu");
        const navIcon = document.getElementById("navIcon");

        navBtn?.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");

            // Animate icon (hamburger → X)
            if (!mobileMenu.classList.contains("hidden")) {
                navIcon.setAttribute("d", "M6 18L18 6M6 6l12 12");
            } else {
                navIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16" />
                `;
            }
        });
    </script>

</body>

</html>
