<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Booking System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg p-5">
        <h1 class="text-xl font-bold text-blue-600 mb-6">
            Hotel System
        </h1>

        <nav class="space-y-3">

            <a href="{{ route('dashboard') }}" class="block text-gray-700 hover:text-blue-500">
                Dashboard
            </a>

            @if(auth()->user()->hasPermission('manage-rooms'))
                <div class="bg-green-100 p-4 rounded">
                    
                    <a href="{{ route('rooms.index') }}">Manage Rooms</a>
                </div>
            @endif

            <a href="{{ route('bookings.index') }}" class="block text-gray-700 hover:text-blue-500">
                Bookings
            </a>
            <a href="{{ route('roles.index') }}" class="block text-gray-700 hover:text-blue-500">
                Roles
            </a>

            @if(auth()->user()->hasPermission('manage-users'))
                <div class="block text-gray-700 hover:text-blue-500">

                    <a href="{{ route('users.index') }}">Manage Users</a>
                </div>
            @endif
        </nav>
    </aside>

    <!-- Main -->
    <main class="flex-1 p-6">

        <!-- Top bar -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">
                @yield('title')
            </h2>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-500 text-white px-4 py-2 rounded">
                    Logout
                </button>
            </form>
        </div>

        <!-- Content -->
        @yield('content')

    </main>

</div>

</body>
</html>
