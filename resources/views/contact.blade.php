<x-layout>
    <h1 class="text-2xl font-bold mb-4">Contact Us</h1>

    @if(session('success'))
        <p class="text-green-600">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}" class="bg-white p-6 rounded w-full max-w-lg md:p-14 lg:p-16 xl:p-20">
        @csrf
        <label for="name" class="block mb-2">Name:</label>
        <input type="text" name="name" class="border p-2 w-full mb-4" required>

        <label for="email" class="block mb-2">Email:</label>
        <input type="email" name="email" class="border p-2 w-full mb-4" required>

        <label for="message" class="block mb-2">Message:</label>
        <textarea name="message" class="border p-2 w-full mb-4" rows="5" required></textarea>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send</button>
    </form>
</x-layout>
