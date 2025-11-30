<x-layout :hideLinks="true">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
            <!-- Login Title -->
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Login
            </h2>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12 px-4 py-2">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12 px-4 py-2">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition">
                        Login
                    </button>
                </div>
            </form>

            <!-- Register Link -->
            <p class="mt-4 text-center text-sm text-gray-500">
                Don't have an account?
                <a href="{{ url('register') }}" class="text-indigo-600 hover:underline">Register here</a>
            </p>
        </div>
    </div>
</x-layout>
