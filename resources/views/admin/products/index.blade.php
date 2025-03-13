@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Product Management</h1>

    <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Product</a>

    @if(session('success'))
        <p class="mt-2 text-green-600">{{ session('success') }}</p>
   @endif

    <table class="w-full mt-4 bg-white border">
        <thead>
            <tr>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Price</th>
                <th class="px-4 py-2 border">Stock</th>
                <th class="px-4 py-2 border">Image</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="px-4 py-2 border">{{ $product->id }}</td>
                    <td class="px-4 py-2 border">{{ $product->name }}</td>
                    <td class="px-4 py-2 border">${{ $product->price }}</td>
                    <td class="px-4 py-2 border">{{ $product->stock }}</td>
                    <td class="px-4 py-2 border">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-16 h-16 rounded">
                        @endif
                    </td>
                    <td class="px-4 py-2 border">
                        <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

