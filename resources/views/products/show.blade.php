<x-layout>
    <div class="max-w-3xl mx-auto bg-white p-6 shadow-md rounded">
        @if($product->image)
            <img src="{{ asset("storage/" . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover rounded">
        @endif
        <h1 class="text-2xl font-bold mt-4">{{ $product->name }}</h1>
        <p class="text-gray-500 mt-2">${{ number_format($product->price, 2) }}</p>
        <p class="mt-4">{{ $product->description }}</p>
            <form action="POST" class="mt-6">
                @csrf
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add to Cart</button>
            </form>
    </div>
</x-layout>

