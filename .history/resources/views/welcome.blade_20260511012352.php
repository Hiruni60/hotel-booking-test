<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-blue-600 shadow">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-blue-600">
                Laravel Assessment
            </h1>

            <div class="space-x-4">
                <a href="#" class="text-gray-700 hover:text-blue-500">
                    Home
                </a>

                <a href="#" class="text-gray-700 hover:text-blue-500">
                    Products
                </a>

                <a href="#" class="text-gray-700 hover:text-blue-500">
                    Contact
                </a>

                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- Left Content -->
            <div>
                <h2 class="text-5xl font-bold text-gray-800 leading-tight">
                    Build Full Stack Apps
                    <span class="text-blue-500">Fast</span>
                </h2>

                <p class="mt-6 text-gray-600 text-lg">
                    Laravel + Blade + Tailwind CSS starter template for your technical assessment.
                </p>

                <div class="mt-8 flex gap-4">
                    <a href="#"
                       class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg shadow">
                        Get Started
                    </a>

                    <a href="#"
                       class="border border-gray-300 hover:bg-gray-100 px-6 py-3 rounded-lg">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Right Card -->
            <div class="bg-white shadow-xl rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    Quick Features
                </h3>

                <div class="space-y-4">

                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                            🚀
                        </div>

                        <div>
                            <h4 class="font-semibold">Fast Development</h4>
                            <p class="text-gray-500 text-sm">
                                Build CRUD applications quickly.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                        <div class="bg-green-100 text-green-600 p-3 rounded-full">
                            🔒
                        </div>

                        <div>
                            <h4 class="font-semibold">Secure Authentication</h4>
                            <p class="text-gray-500 text-sm">
                                Laravel authentication ready.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                        <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                            🎨
                        </div>

                        <div>
                            <h4 class="font-semibold">Modern UI</h4>
                            <p class="text-gray-500 text-sm">
                                Tailwind CSS responsive design.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Stats Section -->
    <section class="container mx-auto px-6 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white shadow rounded-2xl p-6 text-center">
                <h3 class="text-4xl font-bold text-blue-500">10+</h3>
                <p class="text-gray-600 mt-2">Projects Completed</p>
            </div>

            <div class="bg-white shadow rounded-2xl p-6 text-center">
                <h3 class="text-4xl font-bold text-green-500">100%</h3>
                <p class="text-gray-600 mt-2">Responsive Design</p>
            </div>

            <div class="bg-white shadow rounded-2xl p-6 text-center">
                <h3 class="text-4xl font-bold text-purple-500">24/7</h3>
                <p class="text-gray-600 mt-2">Development Ready</p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t">
        <div class="container mx-auto px-6 py-6 text-center text-gray-500">
            © {{ date('Y') }} Laravel Assessment. All rights reserved.
        </div>
    </footer>

</body>
</html>
