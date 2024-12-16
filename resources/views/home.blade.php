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


    <footer class="bg-[#E5FFE] py-10 border-t border-gray-200">
        <div class="container mx-auto px-6 lg:px-20 flex flex-col lg:flex-row justify-between">
          <!-- Kolom Kiri: Informasi Kontak -->
          <div>

            <div class="flex items-center mb-2">
                <i class="fas fa-dove text-4xl"></i>
                <h1 class="text-2xl font-bold  mb-4 mr-4 text-[#2d3e50]">Rawingi Tech</h1>
            </div>
    
            <!-- Lokasi -->
            <div class="mb-4">
              <p class="flex items-center text-gray-600 mb-1">
                <svg class="w-6 h-6 px-1 text-gray-800 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                  </svg>
    
                <a href="https://maps.google.com/?q=SMK+RUS" target="_blank" class="hover:underline text-blue-600 font-medium ">SMK RUS</a>
              </p>
              <p class="text-sm text-gray-500 leading-relaxed ">
                Jalan Sukun Raya No.09, Besito Kulon,<br>Besito, Kec. Gebog, Kabupaten Kudus, Jawa Tengah 59333
              </p>
            </div>
    
            <!-- Email -->
            <div class="mb-4">
              <p class="flex items-center text-gray-600">
                <svg class="w-6 h-6 px-1 text-gray-800 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                  </svg>
    
                <a  class="hover:underline text-blue-600 font-medium ">Email</a>
              </p>
              <p class="text-sm text-gray-500 ">rawingi_tech@gmail.com</p>
            </div>
    
            <!-- WhatsApp -->
            <div>
              <p class="flex items-center text-gray-600">
                <svg class="w-6 h-6 px-1 text-gray-800 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/><path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/></svg>
                <a href="https://wa.me/6282120263374" target="_blank" class="hover:underline text-blue-600 font-medium ">Whatsapp</a>
              </p>
              <p class="text-sm text-gray-500">+62 82120263374</p>
            </div>
          </div>
        <div class="py-4"></div>
          <!-- Kolom Kanan: Menu Navigasi -->
          <div class="grid grid-cols-3 gap-6 text-gray-800 text-sm">
            <div>
                <h2 class="font-semibold mb-4 mr-4 text-lg text-[#2d3e50]">Rawingi Tech</h2>
              <ul>
                <li class="mb-2 ">  <a  class="hover:underline">About</a></li>
                <li class="mb-2 ">  <a  class="hover:underline">FAQ</a></li>
                <li class="mb-2 ">  <a  class="hover:underline">Purpose</a></li>
              </ul>
            </div>
            <div>
              <h2 class="font-semibold mb-4 text-lg  text-[#2d3e50]">Layanan</h2>
              <ul>
                <li class="mb-2 "><a href="/home" class="hover:underline">Home</a></li>
                <li class="mb-2 "><a href="/learn" class="hover:underline">Learn</a></li>
                <li class="mb-2 "><a href="/profile" class="hover:underline">Profile</a></li>
              </ul>
            </div>
            <div>
              <h2 class="font-semibold mb-4 text-lg text-[#2d3e50]">Bantuan</h2>
              <ul>
                <li class="mb-2">
                    <a class="hover:underline">Syarat dan Ketentuan</a>
                </li>
                <li class="mb-2">
                    <a class="hover:underline">Kebijakan Privasi</a>
                </li>
                <li class="mb-2">
                    <a class="hover:underline">Bantuan</a>
                </li>
            </ul>
    
            </div>
          </div>
        </div>
    
        <!-- Garis pemisah -->
        <div class="border-b border-gray-200 my-6"></div>
    
        <!-- Copyright -->
        <div class="text-center text-sm text-[#2d3e50] font-semibold">
          Copyright © 2024 Rawingi Tech. All rights reserved.
        </div>
    </footer>


</x-layout>
