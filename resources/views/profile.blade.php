<x-layout-profile>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="h-screen flex flex-col bg-[#C0F8C2]">
        <div class="flex flex-1">

            <aside class="w-64 bg-[#C0F8C2] p-6 flex flex-col items-center">
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
                            <a href="/profile-mycourse" class="flex items-center text-black hover:text-green-600">
                                <i class="fas fa-book mr-3"></i> My Course
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


            <main class="flex-1 bg-[#E5FFE6] p-8">
                <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
                <div class="space-y-6">

                    
                </div>
            </main>
        </div>
    </div>

</x-layout-profile>
