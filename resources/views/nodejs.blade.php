<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <!-- Container Utama -->
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">
            <!-- Left Section -->
            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://miro.medium.com/v2/resize:fit:1400/1*QXXviQI-N1jzuOOajsIe7g.png" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">Web Dev</p>
                <h3 class="font-bold text-lg">Node Js For Beginners</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 3</span>
                    <span>👤 597rb</span>
                </div>

                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>

            <!-- Right Section -->
            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">Node Js</h1>
                <p class="text-gray-700 mb-4">
                    Node.js is a powerful and flexible runtime environment that allows you to run JavaScript code on the server side. It is widely used for building fast, scalable network applications, including web servers, APIs, and real-time applications like chat apps and online games. Node.js is designed to be lightweight and efficient, leveraging non-blocking, event-driven architecture to handle concurrent connections.
                </p>
                <p class="text-gray-700 mb-4">
                    In this class, you will learn the basics of Node.js programming, including how to set up a Node.js environment, write, debug, and execute your first server-side programs. You will also explore key concepts such as asynchronous programming, handling HTTP requests, and working with databases, which are essential for building modern, scalable web applications.
                </p>
                <p class="text-gray-700 mb-6">
                    By the end of this course, you will have the skills to create server-side applications using Node.js, enabling you to build dynamic, high-performance web applications and services.
                </p>

                <a href="#" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Start Class
                </a>
            </div>
        </div>
    </div>



</x-layout>
