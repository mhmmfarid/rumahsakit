<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SIMRS') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-xl font-bold text-blue-600">{{ config('app.name', 'SIMRS') }}</div>
            <div class="flex items-center gap-4">
                <span class="text-gray-700">{{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-white shadow-sm mt-12 py-4">
        <div class="container mx-auto text-center text-gray-600">
            <p>&copy; 2026 SIMRS. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
