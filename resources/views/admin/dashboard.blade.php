@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6"> Welcome to the Admin Dashboard</h1>

    <div class="grid grid-cols-3 gap-6">
        <!-- Card: Total Orders -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Total Orders</h2>
            <p class="text-gray-500 text-2xl font-bold">152</p>
        </div>

        <!-- Card: Total Revenue -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Total Revenue</h2>
            <p class="text-gray-500 text-2xl font-bold">$12,500</p>
        </div>

        <!-- Card: Total Products -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Total Products</h2>
            <p class="text-gray-500 text-2xl font-bold">42</p>
        </div>
    </div>
@endsection
