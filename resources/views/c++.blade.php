<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <!-- Container Utama -->
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">
            <!-- Left Section -->
            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://miro.medium.com/v2/resize:fit:1400/0*Nx-rPatNPrza5lys" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">Web Dev, Game Dev</p>
                <h3 class="font-bold text-lg">C++</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 3</span>
                    <span>👤 487rb</span>
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
                <h1 class="font-bold text-4xl mb-4">C++</h1>
                <p class="text-gray-700 mb-4">
                    C++ is a versatile and powerful programming language that helps you create apps and programs that can run on various devices, such as computers, mobile phones, and even TVs. It is designed to be simple, secure, and easy to use, allowing you to write a program once and run it anywhere.
                </p>
                <p class="text-gray-700 mb-4">
                    In this class, you will learn the basics of C++ programming, including how to write, debug, and execute your first programs. You will also explore key concepts such as variables, loops, and object-oriented programming, which form the foundation of creating real-world applications.
                </p>
                <p class="text-gray-700 mb-6">
                    In this class, you will get to know and learn the basics of the C++ programming language.
                </p>
                <button href="#" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Start Class
                </button>
            </div>
        </div>
    </div>



</x-layout>
