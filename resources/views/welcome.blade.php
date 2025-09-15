<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Left Side: Image -->
        <div class="hidden md:flex w-1/2 items-center justify-center bg-cover bg-center"
             style="background-image: url('https://images.unsplash.com/photo-1756814879165-d2eb1606c3c0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <!-- overlay -->
            <div class="bg-black bg-opacity-40 w-full h-full flex items-center justify-center">
                <h1 class="text-4xl font-bold text-white drop-shadow-lg">Welcome to Your Personal Blog</h1>
            </div>
        </div>

        <!-- Right Side: Content -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-10">
            <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Your Stories, Your Space ✍️</h2>
                <p class="text-gray-600 mb-6">A simple place to share your thoughts and experiences with the world.</p>

                <!-- Auth Buttons -->
                <div class="flex flex-col gap-3">
                    <a href="{{ route('register') }}" 
                       class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg text-center font-semibold hover:bg-blue-700 transition">
                        Sign Up
                    </a>
                    <a href="{{ route('login') }}" 
                       class="w-full px-6 py-3 bg-gray-700 text-white rounded-lg text-center font-semibold hover:bg-gray-800 transition">
                        Login
                    </a>
                </div>

                <hr class="my-6">

                <!-- Quick Links -->
                {{-- <div class="grid grid-cols-1 gap-3">
                    <a href="https://laravel.com/docs" target="_blank"
                       class="block px-4 py-3 rounded-lg border hover:bg-gray-100 text-center text-gray-700 transition">
                        📖 Read the Documentation
                    </a>
                    <a href="https://laracasts.com" target="_blank"
                       class="block px-4 py-3 rounded-lg border hover:bg-gray-100 text-center text-gray-700 transition">
                        🎥 Watch Video Tutorial
                    </a>
                    <a href="https://vercel.com" target="_blank"
                       class="block px-4 py-3 rounded-lg border hover:bg-gray-100 text-center text-gray-700 transition">
                        🚀 Deploy Now
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</body>
</html>
