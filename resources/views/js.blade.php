<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <!-- JavaScript -->
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">
            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://janikvonrotz.ch/images/javascript-logo.png" alt="JavaScript Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">Web Dev</p>
                <h3 class="font-bold text-lg">JavaScript For Beginners</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 0</span>
                    <span>👤 0</span>
                </div>
                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>
            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">JavaScript</h1>
                <p class="text-gray-700 mb-4">JavaScript is a popular programming language for creating dynamic and interactive web content. It's used on websites, servers, and even mobile apps.</p>
                <p class="text-gray-700 mb-6">
                    In this class, you will get to know and learn the basics of the Java programming language.
                </p>
                <p class="text-gray-700 mb-4">In this class, you'll learn the fundamentals of JavaScript, including syntax, variables, loops, and event handling, empowering you to build interactive web applications.</p>
                <button href="#" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">Start Class</button>
            </div>
        </div>
    </div>
</x-layout>
