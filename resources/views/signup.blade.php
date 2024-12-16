<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Rawingi Tech</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-100 via-green-200 to-[#E5FFE6] flex items-center justify-center min-h-screen">
    <div class="w-full max-w-6xl flex ">
        
        <div class="w-full lg:w-1/2 p-10">
            <div class="bg-gradient-to-tr from-white to-green-100 p-8 rounded-xl shadow-lg">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-green-700">Sign Up</h1>
                    <p class="mt-2 text-gray-600 text-sm">Create your account to join our course</p>
                </div>
                <form class="mt-6 space-y-5">
                    <div>
                        <label for="username" class="block text-gray-700 font-medium text-sm mb-1">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-medium text-sm mb-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 font-medium text-sm mb-1">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-green-500 to-green-700 text-white py-2 rounded-lg hover:from-green-400 hover:to-green-600 transition-all duration-300">
                        Sign Up
                    </button>
                </form>
                <p class="text-center text-sm text-gray-600 mt-4">Already have an account?
                    <a href="/login" class="text-green-500 font-medium hover:underline">Sign In</a>
                </p>
            </div>
        </div>

        <div class="w-full lg:w-1/2 p-10 flex flex-col justify-center items-center">
            <div class="bg-gradient-to-br from-green-50 to-green-200 p-8 rounded-xl shadow-lg">
                <h2 class="text-3xl font-bold text-green-700 text-center">Welcome to Rawingi Tech!</h2>
                <p class="mt-4 text-gray-700 text-center text-sm leading-relaxed">
                    Join our coding community and start your course toward mastering new skills. Explore endless possibilities, grow your knowledge, and build your future as a developer.
                </p>
                <div class="mt-6">
                    <img src="{{ asset('images/sigup_rawingi.png') }}"
                        alt="Coding Illustration" >
                </div>
            </div>
        </div>
    </div>
</body>
</html>