<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Booking System</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center min-h-screen">

    <div class="bg-white p-10 rounded-2xl shadow-lg text-center max-w-md">

        <h1 class="text-3xl font-bold text-gray-800 mb-4">
            Welcome to Our Hotel
        </h1>

        <p class="text-gray-600 mb-6">
            Manage rooms, bookings, and staff efficiently with our hotel management system.
        </p>

        <a href="{{ route('login') }}"
           class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
            Login
        </a>

    </div>

</body>
</html>
