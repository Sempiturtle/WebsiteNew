<x-layout>
    <section class="flex flex-col items-center justify-center h-[70vh] text-center px-4">
        <h1 class="text-5xl font-bold text-gray-900 mb-6">Welcome to My Website</h1>
        <p class="text-gray-600 text-lg max-w-xl mb-8">
            Welcome to a place where clean design meets powerful features. Explore, create, and enjoy the simplicity of the new era.
        </p>

        <a href="{{ route('register') }}"
            class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Get Started
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </section>
</x-layout>
