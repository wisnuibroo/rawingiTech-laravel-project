<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">
            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://miro.medium.com/v2/resize:fit:1400/1*DcvZbgx03GYUw01z6wtUZA.jpeg" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">Web Dev, Mobile Dev</p>
                <h3 class="font-bold text-lg">Golang Basics</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 4</span>
                    <span>👤 648rb</span>
                </div>

                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>

            
            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">Golang</h1>
                <p class="text-gray-700 mb-4">
                    Go, also known as Golang, is a statically typed and compiled programming language created by Google. It is designed for building fast, efficient, and scalable software, making it ideal for web servers, networking tools, and cloud-based applications. Go's simplicity, concurrency support, and strong performance make it a popular choice for modern software development.
                </p>
                <p class="text-gray-700 mb-4">
                    In this class, you will learn the basics of Go programming, including how to write, debug, and execute your first programs. You will explore key concepts such as variables, loops, functions, and concurrency, which are essential for building efficient, high-performance applications.
                </p>
                <p class="text-gray-700 mb-6">
                    By the end of this course, you will have a solid understanding of the Go language and be able to build scalable, concurrent applications, making you ready for real-world software development projects.
                </p>

                <button onclick="location.href='{{ route('profile.addCourse', ['course' => 'golang']) }}'" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Start Class
                </button>
            </div>
        </div>
    </div>



</x-layout>
