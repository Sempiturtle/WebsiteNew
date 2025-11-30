<x-layout :hideLinks="true">
    <div class="p-8 bg-gray-50 min-h-screen">

        <!-- Page Title -->
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Task List</h1>

        <!-- Search + Action Buttons -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">

            <!-- Search Form -->
            <form method="GET" action="{{ route('tasks.index') }}" class="flex items-center gap-2 w-full md:w-auto">
                <input
                    type="text"
                    name="search"
                    placeholder="Search tasks..."
                    value="{{ $search ?? '' }}"
                    class="border rounded-lg px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                >
                <button
                    type="submit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition"
                >
                    Search
                </button>
            </form>

            <!-- Action Buttons -->
            <div class="flex gap-2">
                <a
                    href="{{ route('tasks.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"
                >
                    Add Task
                </a>

                <a
                    href="{{ route('dashboard') }}"
                    class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition"
                >
                    Back
                </a>
            </div>
        </div>

        <!-- Task Table -->
        <div class="overflow-x-auto rounded-lg shadow-md bg-white">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Task Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Description</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($tasks as $task)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $task->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $task->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $task->description }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 flex gap-4">

                                <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-600 hover:underline">
                                    Edit
                                </a>

                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">
                                        Delete
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-6 text-gray-500 italic">
                                No tasks found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</x-layout>
