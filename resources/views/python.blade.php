<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">
            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://ideacdn.net/idea/ct/82/myassets/blogs/python-avantaj.jpg?revision=1581874510" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">Mobile Dev</p>
                <h3 class="font-bold text-lg">Mobile Python</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 3</span>
                    <span>👤 743rb</span>
                </div>

                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>

            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">Python</h1>
                <p class="text-gray-700 mb-4">
                    Python is a versatile and powerful programming language widely used for web development, data analysis, machine learning, automation, and more. Known for its simplicity and readability, Python allows developers to write clean and efficient code for a wide range of applications. It is suitable for both beginners and advanced programmers.
                </p>
                <p class="text-gray-700 mb-4">
                    In this class, you will learn the basics of Python programming, including how to write, debug, and execute your first programs. You will also explore key concepts such as variables, loops, functions, and object-oriented programming (OOP), which are fundamental to building real-world applications.
                </p>
                <p class="text-gray-700 mb-6">
                    By the end of this course, you will have a solid understanding of Python and the skills needed to start building your own applications, whether they are web-based, data-driven, or automated solutions.
                </p>

                <button onclick="location.href='{{ route('profile.addCourse', ['course' => 'python']) }}'" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Add Course
                </button>
            </div>
        </div>
    </div>



</x-layout>
