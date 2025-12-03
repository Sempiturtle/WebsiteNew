<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
</head>

<body class="bg-gray-100 flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow-lg min-h-screen p-6 hidden md:block">

        <h1 class="text-3xl font-bold mb-10 bg-gradient-to-r from-indigo-600 to-sky-500 bg-clip-text text-transparent">
            Admin Panel
        </h1>

        <nav class="space-y-4 text-gray-700 font-medium">

            <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-100">
                📊 Dashboard
            </a>

            <a href="{{ route('tasks.index') }}" class="block px-4 py-2 rounded hover:bg-gray-100">
                📋 View Tasks
            </a>

            <a href="{{ route('tasks.create') }}" class="block px-4 py-2 rounded hover:bg-gray-100">
                ➕ Add Task
            </a>

            <a href="{{ route('profile') }}" class="block px-4 py-2 rounded hover:bg-gray-100">
                👤 Profile
            </a>

            <a href="{{ route('about') }}" class="block px-4 py-2 rounded hover:bg-gray-100">
                ℹ️ About
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full text-left px-4 py-2 rounded hover:bg-red-100 text-red-600">
                    🚪 Logout
                </button>
            </form>

        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8">
        {{ $slot }}
    </main>

</body>
</html>
