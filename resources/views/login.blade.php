<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Rawingi Tech</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-100 via-green-200 to-green-300 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-6xl flex flex-col lg:flex-row rounded-2xl shadow-lg overflow-hidden">
        <!-- Left Section (Login Form) -->
        <div class="w-full lg:w-1/2 p-10 flex flex-col justify-center items-center">
            <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-green-700 mb-2">Sign In</h1>
                    <p class="text-gray-600 text-sm mb-6">Access your account to continue</p>
                </div>

                <form class="space-y-6">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-gray-700 font-medium text-sm mb-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-200 ease-in-out">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-gray-700 font-medium text-sm mb-1">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-200 ease-in-out">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                        class="w-full bg-gradient-to-r from-green-500 to-green-700 text-white py-2 rounded-lg hover:from-green-400 hover:to-green-600 transition duration-300">
                        Sign In
                    </button>
                </form>

                <p class="text-center text-sm text-gray-600 mt-4">Don't have an account? 
                    <a href="/signup" class="text-green-500 font-medium hover:underline">Sign Up</a>
                </p>
            </div>
        </div>

        <!-- Right Section (Moderate Size Card with Image) -->
        <div class="w-full lg:w-1/2 p-10 flex flex-col justify-center items-center">
            <div class="bg-gradient-to-br from-green-50 to-green-200 p-8 rounded-xl shadow-lg w-full max-w-md">
                <h2 class="text-3xl font-bold text-green-700 mb-4 text-center">Welcome Back!</h2>
                <p class="text-gray-700 text-sm leading-relaxed mb-6 text-center">
                    Welcome back to Rawingi Tech! Please sign in to continue your journey with us and achieve your goals step by step.
                </p>
                <div class="mt-4 flex justify-center">
                    <img src="https://ignousolvedassignmentproject.in/wp-content/uploads/2023/02/WhatsApp-Image-2023-01-28-at-10.27.47-AM-1.jpeg" 
                        alt="Welcome Illustration" class="rounded-xl shadow-md w-full max-w-md">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
