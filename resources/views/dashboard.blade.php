<x-admin-layout>

    <h1 class="text-4xl font-bold text-gray-900 mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

        <div class="bg-white shadow p-6 rounded-xl">
            <p class="text-gray-600 font-medium">Total Users</p>
            <p class="text-4xl font-bold text-indigo-600">{{ $userCount }}</p>
        </div>

        <div class="bg-white shadow p-6 rounded-xl">
            <p class="text-gray-600 font-medium">Your Tasks</p>
            <p class="text-4xl font-bold text-sky-600">{{ $tasks->count() }}</p>
        </div>

        <div class="bg-white shadow p-6 rounded-xl">
            <p class="text-gray-600 font-medium">Latest Task</p>
            <p class="text-2xl font-bold text-emerald-600">
                {{ $tasks->last()->name ?? 'None' }}
            </p>
        </div>

    </div>

</x-admin-layout>
