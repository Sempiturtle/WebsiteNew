<x-admin-layout>

    <h1 class="text-3xl font-bold mb-6">Task List</h1>

    <!-- Search -->
    <form method="GET" action="{{ route('tasks.index') }}" class="flex gap-4 mb-6">
        <input
            type="text"
            name="search"
            placeholder="Search tasks..."
            value="{{ $search ?? '' }}"
            class="w-72 px-4 py-2 bg-white border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-400"
        >
        <button
            type="submit"
            class="px-4 py-2 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition">
            Search
        </button>
    </form>

    <!-- Add Task -->
    <a href="{{ route('tasks.create') }}"
        class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded-xl shadow hover:bg-blue-700 transition">
        + Add Task
    </a>

    <!-- Table -->
    <div class="bg-white rounded-xl shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Description</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-100">
                @forelse ($tasks as $task)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $task->id }}</td>
                        <td class="px-6 py-4 font-medium">{{ $task->name }}</td>
                        <td class="px-6 py-4">{{ $task->description }}</td>

                        <td class="px-6 py-4 flex gap-4">

                            <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-600 hover:underline">
                                Edit
                            </a>

                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Delete</button>
                            </form>

                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4" class="py-8 text-center text-gray-500 italic">
                            No tasks found.
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>

</x-admin-layout>
