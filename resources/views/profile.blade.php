<x-admin-layout>

    <h1 class="text-3xl font-bold mb-6">My Profile</h1>

    <div class="bg-white p-6 rounded-xl shadow max-w-xl">

        <p class="text-lg"><strong>Name:</strong> {{ auth()->user()->name }}</p>
        <p class="text-lg"><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <p class="text-lg"><strong>Age:</strong> {{ auth()->user()->age }}</p>
        <p class="text-lg"><strong>Gender:</strong> {{ auth()->user()->gender }}</p>

    </div>

</x-admin-layout>
