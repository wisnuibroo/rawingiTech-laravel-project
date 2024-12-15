<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div>
        <div class="bg-white shadow-lg rounded-lg p-6 flex w-full h-5/6">

            <div class="w-1/3 bg-[#C9F5D9] rounded-lg p-4">
                <img src="https://i0.wp.com/isellerdotblog.wpcomstaging.com/wp-content/uploads/2024/08/ui-ux-design.jpg?resize=750%2C500&ssl=1" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                <p class="text-gray-600">UI/UX</p>
                <h3 class="font-bold text-lg">UI/UX Design</h3>
                <div class="text-gray-700 flex items-center space-x-2 my-2">
                    <span>⭐ 4</span>
                    <span>👤 591rb</span>
                </div>

                <div class="mt-4">
                    <div class="bg-gray-300 w-full rounded-full h-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-1/6"></div>
                    </div>
                    <p class="text-sm mt-2 text-gray-600">0 / 15 Lessons</p>
                </div>
            </div>


            <div class="w-2/3 bg-[#C9F5D9] rounded-lg p-6 ml-6">
                <h1 class="font-bold text-4xl mb-4">UI/UX Design</h1>
                 <p class="text-gray-700 mb-4">
                     UI/UX Design is a crucial aspect of creating digital products that are not only visually appealing but also user-friendly. UI (User Interface) focuses on the look and feel of an application, while UX (User Experience) ensures that the user’s journey through the app is seamless, intuitive, and enjoyable. Together, they create an experience that drives user satisfaction and engagement.
                 </p>
                 <p class="text-gray-700 mb-4">
                     In this class, you will learn the fundamentals of UI/UX design, including principles of design, wireframing, prototyping, and user research. You'll also dive into the process of testing designs with real users to ensure your interface is not only functional but also easy to navigate and visually cohesive.
                 </p>
                 <p class="text-gray-700 mb-6">
                     By the end of this course, you will have the skills to design interfaces that look great and provide an optimal experience for users, laying the foundation for building successful digital products.
                 </p>

                <button onclick="location.href='{{ route('profile.addCourse', ['course' => 'uiux']) }}'"class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white py-2 px-6 rounded hover:from-green-400 hover:to-green-600 transition-all duration-30">
                    Add Course
                </button>
            </div>
        </div>
    </div>



</x-layout>
