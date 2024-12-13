<x-layout-profile>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="h-screen flex flex-col bg-[#E5FFE6]">
        <div class="flex flex-1">

            <aside class="w-64 bg-[#CCFCD7] p-6 flex flex-col items-center">
                <div class="w-20 h-20 bg-gray-200 rounded-full mb-4"></div>
                <span class="font-bold text-lg mb-8">Guest</span>
                <nav class="w-full">
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="flex items-center text-black hover:text-green-600">
                                <i class="fas fa-home mr-3"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-black hover:text-green-600">
                                <i class="fas fa-book mr-3"></i> My Class
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-black hover:text-green-600">
                                <i class="fas fa-certificate mr-3"></i> Certification
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>


            <main class="flex-1 bg-[#DFFFE6] p-8">
                <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
                <div class="space-y-6">

                    <div class="bg-white rounded-lg shadow-md p-6 flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-bold">C#</h2>
                            <p class="text-sm text-gray-500">4 / 18 Lessons</p>
                        </div>
                        <div class="w-1/2">
                            <div class="h-2 bg-gray-200 rounded-full">
                                <div class="h-full bg-green-600 rounded-full" style="width: 22%;"></div>
                            </div>
                            <p class="text-sm text-right mt-1 text-gray-600">22%</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-bold">C++</h2>
                            <p class="text-sm text-gray-500">7 / 15 Lessons</p>
                        </div>
                        <div class="w-1/2">
                            <div class="h-2 bg-gray-200 rounded-full">
                                <div class="h-full bg-green-600 rounded-full" style="width: 46%;"></div>
                            </div>
                            <p class="text-sm text-right mt-1 text-gray-600">46%</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</x-layout-profile>
