@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Add Product</h1>

    @if ($errors->any())
        <div class="text-red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Product Name" class="border p-2 w-full mb-2" required>
        <textarea name="description" placeholder="Product Description" class="border p-2 w-full mb-2"></textarea>
        <input type="number" name="price" min="0" step=".01" placeholder="Price" class="border p-2 w-full mb-2" required>
        <input type="number" name="stock" placeholder="Stock" class="border p-2 w-full mb-2" required>
        <input type="file" name="image" class="border p-2 w-full mb-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Save</button>
    </form>

@endsection
