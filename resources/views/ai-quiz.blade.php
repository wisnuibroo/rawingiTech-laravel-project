<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white shadow-lg rounded-lg p-6 w-full h-auto">
        
        <div class="bg-[#A7ECAA] rounded-lg p-6 mb-6 text-center">
            <h1 class="font-bold text-3xl mb-4 text-gray-800">Quiz Basic AI</h1>
            <p class="text-gray-700 text-sm">Test your knowledge about the basics of Basic AI!</p>
        </div>

        
        <div class="bg-[#F8FAFC] rounded-lg p-6 shadow-md">
            
            
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">1. Apa itu kecerdasan buatan (AI)?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>Kecerdasan buatan adalah...</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Kemampuan mesin untuk meniru perilaku manusia dan menyelesaikan tugas-tugas tertentu</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Menggunakan komputer untuk menggantikan pekerjaan manusia sepenuhnya</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Sistem yang mengandalkan algoritma berbasis logika untuk meniru kecerdasan manusia</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">2. Apa tujuan utama dari pembelajaran mesin (Machine Learning)?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>Pembelajaran mesin bertujuan untuk...</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Mengajarkan komputer untuk belajar dari data dan membuat prediksi atau keputusan tanpa diprogram secara eksplisit</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Mengoptimalkan perangkat keras komputer untuk memproses data lebih cepat</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Memprogram komputer untuk menghasilkan kode sumber secara otomatis</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">3. Apa itu "training data" dalam konteks pembelajaran mesin?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>Training data adalah...</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Sekumpulan data yang digunakan untuk melatih model AI agar dapat belajar dan membuat prediksi</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Data yang digunakan untuk menguji kinerja model AI setelah dilatih</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Data yang digunakan untuk memperbarui algoritma AI secara langsung</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">4. Apa yang dimaksud dengan "overfitting" dalam pembelajaran mesin?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>Overfitting terjadi ketika...</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Model AI terlalu rumit dan mempelajari detail yang tidak relevan dari data pelatihan, mengurangi kemampuan model untuk bekerja dengan data baru</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Model AI tidak cukup mempelajari pola dari data pelatihan dan tidak dapat membuat prediksi yang akurat</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Model AI memiliki lebih banyak data pelatihan yang dibutuhkan untuk melakukan generalisasi yang baik</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">5. Apa itu "neural network" dalam AI?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>Neural network adalah...</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Model pembelajaran mesin yang terinspirasi oleh cara kerja otak manusia untuk mengenali pola dan membuat keputusan</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Proses menghitung prediksi menggunakan data statistik dan regresi linier</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Sistem berbasis algoritma pembelajaran terstruktur yang digunakan untuk mempercepat pemrograman komputer</span>
                    </label>
                </div>
            </div>
            
            
            
        
            


            
        </div>

        

        <!-- Tombol Submit -->
        <div class="flex justify-center mt-6">
            <button id="submitButton" class="bg-green-500 text-white font-bold py-2 px-6 rounded-full hover:bg-green-600 transition duration-300">
                Submit Quiz
            </button>
        </div>

        <!-- Notification Modal -->
        <div id="submissionModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
                <h2 class="text-xl font-semibold text-center text-green-600">Quiz Submitted!</h2>
                <p class="text-center text-gray-700 mt-4">Thank you for completing the quiz!</p>
                <div class="flex justify-center mt-6">
                    <button onclick="closeModal()" class="bg-green-500 text-white py-2 px-6 rounded-full hover:bg-green-600 transition duration-300">
                        Close
                    </button>
                </div>
            </div>
        </div>

        <!-- Error Modal -->
        <div id="errorModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
                <h2 class="text-xl font-semibold text-center text-red-600">Error</h2>
                <p class="text-center text-gray-700 mt-4">Please answer all the questions before submitting!</p>
                <div class="flex justify-center mt-6">
                    <button onclick="closeErrorModal()" class="bg-red-500 text-white py-2 px-6 rounded-full hover:bg-red-600 transition duration-300">
                        Close
                    </button>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.getElementById('submitButton').addEventListener('click', function() {
            let allAnswered = true;

            // Check if any question is unanswered
            const questions = document.querySelectorAll('input[type="radio"]');
            for (let i = 0; i < questions.length; i++) {
                const questionName = questions[i].name;
                const checkedAnswers = document.querySelectorAll(`input[name="${questionName}"]:checked`);
                if (checkedAnswers.length === 0) {
                    allAnswered = false;
                    break;
                }
            }

            if (allAnswered) {
                // Show the submission confirmation modal
                document.getElementById('submissionModal').classList.remove('hidden');
            } else {
                // Show error modal
                document.getElementById('errorModal').classList.remove('hidden');
            }
        });

        function closeModal() {
            // Hide the modal when the close button is clicked
            document.getElementById('submissionModal').classList.add('hidden');
        }

        function closeErrorModal() {
            // Hide the error modal when the close button is clicked
            document.getElementById('errorModal').classList.add('hidden');
        }
    </script>
    </div>
</x-layout>
