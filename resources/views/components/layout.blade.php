<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'My eCommerce Site' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 text-white p-4">
        <a href="{{ route('products.index') }}" class="mr-4">Home</a>
    @auth
        <a href="{{ route('dashboard') }}" class="mr-4">Dashboard</a>
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="mr-4">Login</a>
        <a href="{{ route('register') }}" class="mr-4">Register</a>
    @endauth
    </nav>

<main class="container mx-auto p-6">
    {{ $slot }}
</main>


</body>
</html>
