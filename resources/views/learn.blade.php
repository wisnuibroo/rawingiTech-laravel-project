<x-layout>
    <x-slot:title>{{ $title }}</x-slot>


        <div class="bg-[#C0F8C2] w-full">

            <header class="text-center py-16">
                <h1 class="text-5xl font-bold text-black">LEARN</h1>
                <p class="text-black font-poppins mt-6 max-w-3xl mx-auto">
                    Learn coding the fun way with Rauwingi Tech! Explore a variety of industry-based classes to enhance your digital skills and prepare for the future.
                </p>
            </header>

        </div>

        <div class="flex justify-center space-x-6 py-6">
            <button class="bg-[#A7ECAA] text-black font-medium font-poppins px-6 py-3 rounded-[45px] hover:bg-[#A2D2A2]">Mobile Dev</button>
            <button class="bg-[#A7ECAA] text-black font-medium font-poppins px-6 py-3 rounded-[45px] hover:bg-[#A2D2A2]">Game Dev</button>
            <button class="bg-[#A7ECAA] text-black font-medium font-poppins px-6 py-3 rounded-[45px] hover:bg-[#A2D2A2]">Web Dev</button>
            <button class="bg-[#A7ECAA] text-black font-medium font-poppins px-6 py-3 rounded-[45px] hover:bg-[#A2D2A2]">IoT</button>
            <button class="bg-[#A7ECAA] text-black font-medium font-poppins px-6 py-3 rounded-[45px] hover:bg-[#A2D2A2]">UI/UX</button>
            <button class="bg-[#A7ECAA] text-black font-medium font-poppins px-6 py-3 rounded-[45px] hover:bg-[#A2D2A2]">AI</button>
        </div>


            <section class="py-12 bg-[#C0F8C2] w-full">
                <div class="container mx-auto">


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
                            <p class="text-gray-700">758rb lessons</p>
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
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
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
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-gray-300"><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/c++') }}">
                        <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                            <img src="https://miro.medium.com/v2/resize:fit:1400/0*Nx-rPatNPrza5lys" alt="HTML Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                            <h3 class="font-bold text-lg mt-4">C++</h3>
                            <p class="text-gray-700">487rb lessons</p>
                            <div class="flex justify-center mt-2">
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star-half-alt"></i></span>
                                <span class="text-gray-300"><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/nodejs') }}">
                        <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                            <img src="https://miro.medium.com/v2/resize:fit:1400/1*QXXviQI-N1jzuOOajsIe7g.png" alt="HTML Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                            <h3 class="font-bold text-lg mt-4">Node Js For Beginners</h3>
                            <p class="text-gray-700">597rb lessons</p>
                            <div class="flex justify-center mt-2">
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star-half-alt"></i></span>
                                <span class="text-gray-300"><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/ai') }}">
                        <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                            <img src="https://www.zabala.eu/wp-content/uploads/2023/11/Artificial-intelligente-and-consultancy-1200x675.jpg" alt="HTML Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                            <h3 class="font-bold text-lg mt-4">Basic AI</h3>
                            <p class="text-gray-700">749rb lessons</p>
                            <div class="flex justify-center mt-2">
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-gray-300"><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/golang') }}">
                        <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                            <img src="https://miro.medium.com/v2/resize:fit:1400/1*DcvZbgx03GYUw01z6wtUZA.jpeg" alt="HTML Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                            <h3 class="font-bold text-lg mt-4">Golang Basics</h3>
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

                    <a href="{{ url('/ruby') }}">
                        <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                            <img src="https://cdn-cdpl.sgp1.cdn.digitaloceanspaces.com/source/8b81700471e8917196897fec5d8e28e9/ruby.jpg" alt="HTML Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                            <h3 class="font-bold text-lg mt-4">Ruby For Beginners</h3>
                            <p class="text-gray-700">679rb lessons</p>
                            <div class="flex justify-center mt-2">
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star-half-alt"></i></span>
                                <span class="text-gray-300"><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/uiux') }}">
                        <div class="bg-[#A7ECAA] shadow-lg p-4 rounded-[15px] text-center">
                            <img src="https://i0.wp.com/isellerdotblog.wpcomstaging.com/wp-content/uploads/2024/08/ui-ux-design.jpg?resize=750%2C500&ssl=1" alt="HTML Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                            <h3 class="font-bold text-lg mt-4">UI/UX</h3>
                            <p class="text-gray-700">591rb lessons</p>
                            <div class="flex justify-center mt-2">
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fas fa-star-half-alt"></i></span>
                                <span class="text-gray-300"><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
        </div>

</x-layout>
