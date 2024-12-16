<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white shadow-lg rounded-lg p-6 w-full h-auto">
        
        <div class="bg-[#A7ECAA] rounded-lg p-6 mb-6 text-center">
            <h1 class="font-bold text-3xl mb-4 text-gray-800">Quiz C++</h1>
            <p class="text-gray-700 text-sm">Test your knowledge about the basics of C++ programming!</p>
        </div>

        
        <div class="bg-[#F8FAFC] rounded-lg p-6 shadow-md">
            
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">1. Apa tujuan dari fungsi `main()` dalam program C++?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>int main() { return 0; }</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Fungsi utama yang dijalankan saat program dimulai</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Fungsi untuk mendeklarasikan variabel dalam program</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Fungsi untuk mengimpor pustaka eksternal</span>
                    </label>
                </div>
            </div>
            
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">2. Apa hasil dari kode berikut?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>#include <iostream>
            int main() {
                int x = 10;
                int y = 5;
                std::cout << x / y;
                return 0;
            }</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">2</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">5</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">10</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">3. Apa perbedaan antara `++i` dan `i++` dalam C++?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>int i = 5;
            std::cout << ++i; // Output: 6
            std::cout << i++; // Output: 6, kemudian i = 7</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">`++i` adalah pre-increment (nilai i ditambah sebelum digunakan), sementara `i++` adalah post-increment (nilai i ditambah setelah digunakan)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Tidak ada perbedaan antara keduanya</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">`++i` lebih cepat daripada `i++` karena tidak memerlukan operasi tambahan</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">4. Apa yang akan dicetak oleh kode berikut?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>#include <iostream>
            int main() {
                int x = 5;
                std::cout << "Nilai x: " << x << std::endl;
                return 0;
            }</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Nilai x: 5</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Nilai x: 0</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Tidak ada output</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">5. Apa tujuan dari menggunakan `#include` dalam C++?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>#include <iostream> // Mengimpor pustaka untuk input dan output</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk menyertakan pustaka atau file header ke dalam program</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk mendeklarasikan variabel global</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk mengoptimalkan kecepatan kompilasi</span>
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
