<x-admin-layout>

    <h1 class="text-3xl font-bold mb-6">Edit Task</h1>

    <div class="bg-white p-6 rounded-xl shadow w-full max-w-lg">

        <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold mb-1">Task Name</label>
                <input type="text" name="name" required value="{{ $task->name }}"
                    class="w-full px-4 py-3 border rounded-lg focus:ring-yellow-500">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Description</label>
                <textarea name="description" rows="4"
                    class="w-full px-4 py-3 border rounded-lg">{{ $task->description }}</textarea>
            </div>

            <button class="w-full bg-yellow-600 text-white py-3 rounded-lg hover:bg-yellow-700">
                Update Task
            </button>
        </form>

    </div>

</x-admin-layout>
