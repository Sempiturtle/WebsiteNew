<x-layout :hideLinks="true">
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white p-8 shadow-lg rounded-lg w-full max-w-md">

            <h2 class="text-2xl font-semibold mb-6 text-center">Create Task</h2>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700">Task Name</label>
                    <input type="text" name="name" required
                        class="w-full border rounded-lg px-4 py-2">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Description</label>
                    <textarea name="description" class="w-full border rounded-lg px-4 py-2"></textarea>
                </div>

                <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                    Create
                </button>
            </form>

        </div>
    </div>
</x-layout>
