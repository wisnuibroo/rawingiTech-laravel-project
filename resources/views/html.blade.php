<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">

            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://www.techfor.id/wp-content/uploads/2019/12/html.png" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">Web Dev</p>
                <h3 class="font-bold text-lg">Html Basics</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 3</span>
                    <span>👤 581rb</span>
                </div>

                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>

            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">Html</h1>
                <p class="text-gray-700 mb-4">
                    HTML (HyperText Markup Language) is the standard markup language used to create and design the structure of web pages. It defines the content and layout of a webpage, allowing developers to structure text, images, links, and other elements. HTML is the foundation of every website and is essential for building web-based applications.
                </p>
                <p class="text-gray-700 mb-4">
                    In this class, you will learn the basics of HTML, including how to write and structure web pages using HTML tags. You will also explore key concepts such as elements, attributes, links, forms, and semantic HTML, which form the foundation of modern web development.
                </p>
                <p class="text-gray-700 mb-6">
                    By the end of this course, you will have the skills to create well-structured web pages and understand the role HTML plays in developing a fully functioning website or web application.
                </p>

                <button onclick="location.href='{{ route('profile.addCourse', ['course' => 'html']) }}'" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Add Course
                </button>
            </div>
        </div>
    </div>



</x-layout>
