<x-layout-profile>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="h-screen flex flex-col bg-[#C0F8C2]">
        <div class="flex flex-1">

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
                <h1 class="text-2xl font-bold mb-6">Certification</h1>
                <div class="space-y-6 text-left">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/paper-3d-icon-download-in-png-blend-fbx-gltf-file-formats--document-business-stationery-pack-school-education-icons-8363003.png?f=webp" alt="Dashboard Illustration" class="w-30 h-auto">

                </div>
                <h1 class="text-1xl font-bold mb-6">you don't have a certificate yet</h1>
            </main>

        </div>
    </div>

</x-layout-profile>
