<x-layout>
    <x-slot:title>{{ $title }}</x-slot>


        <div class="bg-[#E5FFE6] w-full">

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


            <section class="py-12 bg-[#E5FFE6] w-full">
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
                            <h3 class="font-bold text-lg mt-4">UI/UX Design</h3>
                            <p class="text-gray-700">591rb lessons</p>
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
            </section>    
        </div>

        
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
