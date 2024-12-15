<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">
            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://cdn-cdpl.sgp1.cdn.digitaloceanspaces.com/source/8b81700471e8917196897fec5d8e28e9/ruby.jpg" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">Web Dev</p>
                <h3 class="font-bold text-lg">Ruby For Beginners</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 4</span>
                    <span>👤 679rb</span>
                </div>

                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>

        
            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">Ruby</h1>
                <p class="text-gray-700 mb-4">
                    Ruby is an elegant, dynamic, and object-oriented programming language known for its simplicity and productivity. It is widely used for web development, particularly with the Ruby on Rails framework, and allows developers to write clean, readable, and maintainable code quickly. Ruby is designed to focus on the needs of the developer, making it a great choice for both beginners and experienced programmers.
                </p>
                <p class="text-gray-700 mb-4">
                    In this class, you will learn the basics of Ruby programming, including how to write, debug, and execute your first programs. You will explore key concepts such as variables, loops, functions, and object-oriented programming (OOP), which are essential for building robust, real-world applications.
                </p>
                <p class="text-gray-700 mb-6">
                    By the end of this course, you will have a solid understanding of Ruby and be able to develop efficient and maintainable applications, from simple scripts to more complex web applications.
                </p>

                <button onclick="location.href='{{ route('profile.addCourse', ['course' => 'ruby']) }}'" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Start Class
                </button>
            </div>
        </div>
    </div>



</x-layout>
