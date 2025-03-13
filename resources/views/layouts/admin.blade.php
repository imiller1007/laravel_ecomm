<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white h-screen p-5">
        <h2 class="text-x1 font-bold mb-5">Admin Dashboard</h2>
        <nav>
            <ul>
                <li class="mb-2">
                    <a href="{{ route('admin.dashboard') }}" class="block p-2 rounded hover:bg-gray-700">Dashboard</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('admin.products') }}" class="block p-2 rounded hover:bg-gray-700">Products</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('admin.orders') }}" class="block p-2 rounded hover:bg-gray-700">Orders</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('admin.users') }}" class="block p-2 rounded hover:bg-gray-700">Users</a>
                </li>
                <li class="mb-2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left p-2 rounded hover:bg-gray-700">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</body>
</html>
