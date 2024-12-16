<x-layout-profile>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="h-screen flex flex-col bg-[#C0F8C2]">
        <div class="flex flex-1">
            <!-- Sidebar -->
            <aside class="w-64 bg-[#C0F8C2] p-6 flex flex-col items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYw5iatTOp55w8yeWuLkId1fc_hpaALV4exg&s" alt="logo" class="w-32 h-32 rounded-full mb-4">
                <span class="font-bold text-lg mb-8">{{ session('username', 'Guest') }}</span>
                <nav class="w-full">
                    <ul class="space-y-4">
                        <li>
                            <a href="/profile" class="flex items-center text-black hover:text-green-600">
                                <i class="fas fa-home mr-3"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-black hover:text-green-600">
                                <i class="fas fa-book mr-3"></i> My Course
                            </a>
                        </li>
                        <li>
                            <a href="/profile-certification" class="flex items-center text-black hover:text-green-600">
                                <i class="fas fa-certificate mr-3"></i> Certification
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="flex-1 bg-[#E5FFE6] p-8">
                <h1 class="text-2xl font-bold mb-6">My Course</h1>
                @php
                $courseImages = [
                    'java' => 'https://www.finoit.com/wp-content/uploads/2022/09/history-of-java-programming-language.jpg',
                    'js' => 'https://janikvonrotz.ch/images/javascript-logo.png',
                    'csharp' => 'https://atlacademy.az/images/cache/18/183cad_c--n-dir.jpg',
                    'mysql' => 'https://mastering-da.com/wp-content/uploads/2023/11/mysql-la-gi-scaled.jpg',
                    'python' => 'https://ideacdn.net/idea/ct/82/myassets/blogs/python-avantaj.jpg?revision=1581874510',
                    'html' => 'https://www.techfor.id/wp-content/uploads/2019/12/html.png',
                    'cpp' => 'https://miro.medium.com/v2/resize:fit:1400/0*Nx-rPatNPrza5lys',
                    'nodejs' => 'https://miro.medium.com/v2/resize:fit:1400/1*QXXviQI-N1jzuOOajsIe7g.png',
                    'ai' => 'https://www.zabala.eu/wp-content/uploads/2023/11/Artificial-intelligente-and-consultancy-1200x675.jpg',
                    'golang' => 'https://miro.medium.com/v2/resize:fit:1400/1*DcvZbgx03GYUw01z6wtUZA.jpeg',
                    'ruby' => 'https://cdn-cdpl.sgp1.cdn.digitaloceanspaces.com/source/8b81700471e8917196897fec5d8e28e9/ruby.jpg',
                    'uiux' => 'https://i0.wp.com/isellerdotblog.wpcomstaging.com/wp-content/uploads/2024/08/ui-ux-design.jpg?resize=750%2C500&ssl=1'
                ];
                $coursesFormatted = [
                    'java' => 'Java Basic',
                    'js' => 'JavaScript for Beginners',
                    'csharp' => 'C# Essentials',
                    'mysql' => 'Basic SQL',
                    'python' => 'Mobile Python',
                    'html' => 'Html Basics',
                    'cpp' => 'C++',
                    'nodejs' => 'Node Js For Beginner',
                    'ai' => 'Basic AI',
                    'golang' => 'Golang Basics',
                    'ruby' => 'Ruby For Beginners',
                    'uiux' => 'UI/UX Design'
                ];
                @endphp

               <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                   @foreach (session('my_courses', []) as $course)
                       <div class="bg-[#A7ECAA] rounded-lg shadow-md p-6">
                           <div class="flex flex-col items-center">
                               <img src="{{ $courseImages[strtolower($course)] ?? 'default-image-url.jpg' }}" alt="{{ ucfirst($course) }} Basics" class="w-full h-40 object-cover rounded-t-[15px]">
                               <p class="text-gray-600 mt-4">{{ $coursesFormatted[strtolower($course)] }}</p>
                               <h3 class="font-bold text-lg mt-2">{{ $coursesFormatted[strtolower($course)] }}</h3>


                           </div>
                       </div>
                   @endforeach
               </div>


            </main>
        </div>
    </div>
</x-layout-profile>
