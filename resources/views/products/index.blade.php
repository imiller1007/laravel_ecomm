@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">All Products</h1>

    <div class="grid grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white p-4 shadow-md rounded">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-40 object-cover rounded">
                @endif
                <h2 class="text-xl font-bold mt-2">{{ $product->name }}</h2>
                <p class="text-gray-500">{{ number_format($product->price, 2) }}</p>
                    <a href="{{ route('products.show', $product) }}" class="text-blue-500 mt-2 inline-block">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
