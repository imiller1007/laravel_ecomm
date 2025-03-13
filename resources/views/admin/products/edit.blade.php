@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

    @if ($errors->any())
        <div class="text-red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ old('name', $product->name) }}" placeholder="Product Name" class="border p-2 w-full mb-2" required>
        <textarea name="description" placeholder="Product Description" class="border p-2 w-full mb-2">{{ old('description', $product->description) }}</textarea>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" min="0" step=".01" placeholder="Price" class="border p-2 w-full mb-2" required>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" placeholder="Stock" class="border p-2 w-full mb-2" required>
        <input type="file" name="image" class="border p-2 w-full mb-2">
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-16 h-16 rounded mb-4">
        @endif
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Update</button>
    </form>
@endsection

