<x-layout>
    <x-slot:title>{{ $title }}</x-slot>


    <section class="bg-[#E5FFE6] py-12">
        <div class="w-full mx-auto flex flex-col lg:flex-row items-center">


            <div class="lg:w-1/2 mt-6 lg:mt-0 pt-12">
                <h1 class="text-5xl font-medium text-black font-poppins mb-4">
                    Being a <span class="text-green-500">Coder</span> <br>Is Now More <span class="text-green-500">Easy</span> and <span class="text-green-500">Fun</span>
                </h1>
                <p class="text-lg font-regular text-black font-poppins mb-6">
                    Master coding effortlessly with <span class="text-green-500">Rawingi Tech’s</span> interactive learning platform.
                    Whether you're a beginner or an advanced coder, our step-by-step guides, hands-on exercises, and real-world projects
                    make learning easy and fun. Start your coding journey today and turn your ideas into reality!
                </p>
                <button onclick="window.location.href='{{ route('learn') }}'" class="bg-[#A7ECAA] text-green-500 font-bold px-6 py-3 rounded-[10px] hover:bg-[#A2D2A2] ml-auto">
                    Continue
                </button>
            </div>

            <div class="lg:w-1/2 mt-6 lg:mt-0">
                <img src="{{ asset('images/wong_rawingi.png') }}" alt="Hero Image" class="w-81 h-30  mx-auto lg:ml-auto">
            </div>

        </div>
    </section>



    <section class="bg-[#A7ECAA] shadow py-8 w-full rounded-[15px]">
        <div class="container mx-auto flex justify-around items-center text-center">

            <div class="flex flex-col items-center">
                <div class="flex items-center mb-2">
                    <div class="bg-white rounded-[10px] p-4 mr-3">

                        <i class="fas fa-book text-green-500"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">100</h2>
                        <p class="text-gray-700">Total Course</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="flex items-center mb-2">
                    <div class="bg-white rounded-[10px] p-4 mr-3">

                        <i class="fas fa-graduation-cap text-green-500"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">100+</h2>
                        <p class="text-gray-700">Expert Mentor</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="flex items-center mb-2">
                    <div class="bg-white rounded-[10px] p-4 mr-3">

                        <i class="fas fa-users text-green-500"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">234k+</h2>
                        <p class="text-gray-700">User Globally</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="bg-[#E5FFE6] py-12 w-full">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-left mb-8">
            Explore Courses by Category
        </h2>
        <p class="text-1xl font-medium font-poppins text-left mb-8">
            Browse top class course by browsing our category which will be more easy for you
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-[#A7ECAA] shadow-xl p-4 rounded-[15px] text-center flex items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqSK8z6ZPts3fSlC2L8c9h20P1APzH7dvRtQ&s" alt="Mobile Development" class="w-16 h-16 mr-4 rounded-[15px] object-cover">
                <div>
                    <h3 class="font-bold text-left">Mobile Development</h3>
                    <p class="text-gray-700 text-left">20 courses available</p>
                </div>
            </div>
            <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center flex items-center">
                <img src="https://ids.ac.id/wp-content/uploads/2020/07/images-2-1.jpeg" alt="Game Development" class="w-16 h-16 mr-4 rounded-[15px] object-cover">
                <div>
                    <h3 class="font-bold text-left">Game Development</h3>
                    <p class="text-gray-700 text-left">24 courses available</p>
                </div>
            </div>
            <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center flex items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEytsjf1kIK31v_5uuBNOK75p_anUX6lmZnQ&sg" alt="Web Development" class="w-16 h-16 mr-4 rounded-[15px] object-cover">
                <div>
                    <h3 class="font-bold text-left">Web Development</h3>
                    <p class="text-gray-700 text-left">30 courses available</p>
                </div>
            </div>
            <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center flex items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8K6yQYb1vy7ZfjycK-HCB0mb4Qy5o5g3Ujx4DetSuPD4PF36a8oLKnGDVyJIitSY4Eew&usqp=CAU" alt="IoT" class="w-16 h-16 mr-4 rounded-[15px] object-cover">
                <div>
                    <h3 class="font-bold text-left">Internet Of Things(IoT)</h3>
                    <p class="text-gray-700 text-left">15 courses available</p>
                </div>
            </div>
            <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center flex items-center">
                <img src="https://www.click-academy.it/wp-content/uploads/2024/07/AI-nel-web-design-come-cambiano-UX-e-UI-768x576.jpg.webp" alt="UI/UX" class="w-16 h-16 mr-4 rounded-[15px] object-cover">
                <div>
                    <h3 class="font-bold text-left">UI/UX</h3>
                    <p class="text-gray-700 text-left">24 courses available</p>
                </div>
            </div>
            <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center flex items-center">
                <img src="https://xira.ai/wp-content/uploads/2023/05/img16.png" alt="Artificial Intelligence" class="w-16 h-16 mr-4 rounded-[15px] object-cover">
                <div>
                    <h3 class="font-bold text-left">Artificial Intelligence (AI)</h3>
                    <p class="text-gray-700 text-left">31 courses available</p>
                </div>
            </div>
        </div>

    </div>
</section>


    <section class="py-12 bg-[#C0F8C2  w-full">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-4xl font-bold text-left mb-8">
                        Popular Courses For You
                    </h2>
                    <p class="text-1xl font-medium font-poppins text-left mb-8">
                        Learn new skills and advance your career
                    </p>
                </div>
                <button onclick="window.location.href='{{ route('learn') }}'" class="bg-[#A7ECAA] text-green-500 font-bold px-6 py-3 rounded-[10px] hover:bg-[#A2D2A2] ml-auto">
                    See All
                </button>
            </div>

            <a href="{{ url('/java') }}">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                    <img src="https://www.finoit.com/wp-content/uploads/2022/09/history-of-java-programming-language.jpg" alt="Java Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                    <h3 class="font-bold text-lg mt-4">Java Basics</h3>
                    <p class="text-gray-700">863rb lessons</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star-half-alt"></i></span>
                        <span class="text-gray-300"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </a>

            <a href="{{ url('/js') }}">
                <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                    <img src="https://janikvonrotz.ch/images/javascript-logo.png" alt="JavaScript for Beginners" class="w-full h-40 object-cover rounded-t-[15px]">
                    <h3 class="font-bold text-lg mt-4">JavaScript for Beginners</h3>
                    <p class="text-gray-700">758rb lesson</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-gray-300"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </a>

            <a href="{{ url('/csharp') }}">
                <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                    <img src="https://atlacademy.az/images/cache/18/183cad_c--n-dir.jpg" alt="C# Essentials" class="w-full h-40 object-cover rounded-t-[15px]">
                    <h3 class="font-bold text-lg mt-4">C# Essentials</h3>
                    <p class="text-gray-700">346rb lessons</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-gray-300"><i class="fas fa-star"></i></span>
                        <span class="text-gray-300"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </a>

            <a href="{{ url('/mysql') }}">
                <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                    <img src="https://mastering-da.com/wp-content/uploads/2023/11/mysql-la-gi-scaled.jpg" alt="Basic SQL" class="w-full h-40 object-cover rounded-t-[15px]">
                    <h3 class="font-bold text-lg mt-4">Basic SQL</h3>
                    <p class="text-gray-700">648rb lessons</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star-half-alt"></i></span>
                        <span class="text-gray-300"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </a>
            <a href="{{ url('/python') }}">
                <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                    <img src="https://ideacdn.net/idea/ct/82/myassets/blogs/python-avantaj.jpg?revision=1581874510" alt="Mobile Python" class="w-full h-40 object-cover rounded-t-[15px]">
                    <h3 class="font-bold text-lg mt-4">Mobile Python</h3>
                    <p class="text-gray-700">743rb lessons</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star-half-alt"></i></span>
                        <span class="text-gray-300"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </a>

            <a href="{{ url('/html') }}">
                <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                    <img src="https://www.techfor.id/wp-content/uploads/2019/12/html.png" alt="HTML Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                    <h3 class="font-bold text-lg mt-4">HTML Basics</h3>
                    <p class="text-gray-700">581rb lessons</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-400"><i class="fas fa-star-half-alt"></i></span>
                        <span class="text-gray-300"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </a>
            </div>

            </div>
        </div>
    </section>
</x-layout>
