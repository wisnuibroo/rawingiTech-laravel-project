<x-layout-profile>
    <x-slot:title>Profile</x-slot:title>

    <div class="h-screen flex flex-col bg-[#C0F8C2]">
        <div class="flex flex-1">
            <aside class="w-64 bg-[#C0F8C2] p-6 flex flex-col items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYw5iatTOp55w8yeWuLkId1fc_hpaALV4exg&s" alt="logo" class="w-32 h-32 rounded-full mb-4">
                <!-- Menampilkan username dari session -->
                <span class="font-bold text-lg mb-8">{{ session('username') }}</span>
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
                            <a href="/profile-certification" class="flex items-center text-black hover:text-green-600">
                                <i class="fas fa-certificate mr-3"></i> Certification
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="flex-1 bg-[#E5FFE6] p-8">
                <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
                <div class="space-y-6 text-left">
                    <img src="https://png.pngtree.com/png-vector/20240322/ourmid/pngtree-start-learning-with-free-trial-online-courses-png-image_12187235.png" 
                        alt="Dashboard Illustration" class="w-50 h-auto">
                </div>
            </main>
        </div>
    </div>
</x-layout-profile>
