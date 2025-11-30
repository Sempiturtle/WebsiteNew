<x-layout :hideLinks="true">
    <div class="min-h-screen bg-gradient-to-r from-indigo-200 via-sky-300 to-emerald-450 py-10">

        <div class="max-w-7xl w-full mx-auto px-4">

            <!-- Dashboard Header -->
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">
                Welcome to the Dashboard!
            </h1>

            <!-- User Count -->
            <div class="text-center text-lg mb-12">
                <p>
                    Total Registered Users:
                    <span class="font-semibold">{{ $userCount }}</span>
                </p>
            </div>

            <!-- Task Management Section -->
            <div class="mb-12">

                <!-- Section Title -->
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Task Management</h2>

                <!-- Action Buttons -->
                <div class="flex flex-col md:flex-row items-center md:justify-between gap-4 mb-6">

                    <div class="flex flex-wrap gap-4">
                        <!-- Create Task -->
                        <a href="{{ route('tasks.create') }}"
                           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            Add New Task
                        </a>

                        <!-- Show Tasks -->
                        <a href="{{ route('tasks.index') }}"
                           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            Show Tasks
                        </a>
                    </div>

                    <!-- Logout -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition">
                            Logout
                        </button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</x-layout>
