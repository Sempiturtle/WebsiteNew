<x-layout :hideLinks="true">
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white p-8 shadow-lg rounded-lg w-full max-w-md">

            <h2 class="text-2xl font-semibold mb-6 text-center">Edit Task</h2>

            <form action="{{ route('tasks.update', $task) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700">Task Name</label>
                    <input type="text" name="name" required
                        value="{{ $task->name }}"
                        class="w-full border rounded-lg px-4 py-2">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Description</label>
                    <textarea name="description" class="w-full border rounded-lg px-4 py-2">{{ $task->description }}</textarea>
                </div>

                <button class="w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700">
                    Update
                </button>

            </form>

        </div>
    </div>
</x-layout>
