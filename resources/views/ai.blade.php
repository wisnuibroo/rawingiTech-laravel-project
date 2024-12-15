<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">

            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://www.zabala.eu/wp-content/uploads/2023/11/Artificial-intelligente-and-consultancy-1200x675.jpg" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">AI</p>
                <h3 class="font-bold text-lg">Basic AI</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 4</span>
                    <span>👤 749rb</span>
                </div>

                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>


            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">AI</h1>
                <p class="text-gray-700 mb-4">
                    Artificial Intelligence (AI) is a field of computer science focused on creating systems that can perform tasks that would typically require human intelligence. AI can be applied in various areas such as natural language processing, image recognition, decision-making, and autonomous systems. It is designed to enable machines to learn from data, adapt to new information, and make decisions autonomously.
                </p>
                <p class="text-gray-700 mb-4">
                    In this class, you will learn the basics of AI, including how to build and implement simple AI models, train them with data, and evaluate their performance. You will explore key concepts such as machine learning, neural networks, and algorithms that form the foundation of AI development.
                </p>
                <p class="text-gray-700 mb-6">
                    By the end of this course, you will have the skills to understand AI fundamentals and start developing basic AI applications, which can be applied in various real-world scenarios, from automation to data analysis.
                </p>

                <button onclick="location.href='{{ route('profile.addCourse', ['course' => 'ai']) }}'" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Add Course
                </button>
            </div>
        </div>
    </div>



</x-layout>
