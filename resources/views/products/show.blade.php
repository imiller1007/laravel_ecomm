@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-6 shadow-md rounded">
        @if($product->image)
            <img src="{{ asset("storage/" . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover rounded">
        @endif
        <h1 class="text-2xl font-bold mt-4">{{ $product->name }}</h1>
    </div>
