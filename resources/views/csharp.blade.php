<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">

            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://atlacademy.az/images/cache/18/183cad_c--n-dir.jpg" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">Game Dev, IoT</p>
                <h3 class="font-bold text-lg">C# Essentials</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 3</span>
                    <span>👤 346rb</span>
                </div>

                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>

            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">C#</h1>
                <p class="text-gray-700 mb-4">
                    C# is a powerful and flexible programming language widely used for developing a variety of applications, including desktop software, games, and mobile apps. It is designed to be simple, secure, and scalable, making it an ideal choice for building cross-platform applications that can run on different devices, such as computers, smartphones, and even gaming consoles.
                </p>
                <p class="text-gray-700 mb-4">
                    In this class, you will learn the fundamentals of C# programming, including how to write, debug, and run your first programs. You will also explore key concepts such as variables, loops, and object-oriented programming (OOP), which are essential for building real-world applications.
                </p>
                <p class="text-gray-700 mb-6">
                    By the end of this course, you will have the foundation needed to begin developing your own applications in C#, from simple programs to more complex, real-world software solutions.
                </p>

                <button onclick="location.href='{{ route('profile.addCourse', ['course' => 'csharp']) }}'" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Add Course
                </button>
            </div>
        </div>
    </div>



</x-layout>
