<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white shadow-lg rounded-lg p-6 w-full h-auto">
        
        <div class="bg-[#A7ECAA] rounded-lg p-6 mb-6 text-center">
            <h1 class="font-bold text-3xl mb-4 text-gray-800">Quiz Node Js for Beginners</h1>
            <p class="text-gray-700 text-sm">Test your knowledge about the basics of Node Js!</p>
        </div>

        
        <div class="bg-[#F8FAFC] rounded-lg p-6 shadow-md">
            
            

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">1. Apa itu Node.js?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>Node.js adalah...</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Platform runtime berbasis JavaScript untuk server-side</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Framework untuk membangun aplikasi frontend</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question1" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Bahasa pemrograman yang mirip dengan JavaScript</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">2. Apa tujuan dari `require()` dalam Node.js?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>const fs = require('fs');</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk mengimpor modul atau file eksternal</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk mendeklarasikan variabel dalam aplikasi</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question2" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk menjalankan server web dalam aplikasi</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">3. Apa hasil dari kode berikut di Node.js?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>console.log('Hello, Node.js!');</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Hello, Node.js!</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">undefined</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question3" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Error: console is not defined</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">4. Apa yang dilakukan oleh `npm init` dalam proyek Node.js?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>npm init</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Membuat file `package.json` untuk mengelola dependensi proyek</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Menginstall paket-paket yang diperlukan dalam proyek</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question4" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Menjalankan server web untuk proyek</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">5. Apa tujuan dari `process.env` dalam Node.js?</h2>
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <pre class="whitespace-pre-wrap overflow-x-auto text-sm text-gray-800">
                        <code>console.log(process.env.PATH);</code>
                    </pre>
                </div>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk mengakses variabel lingkungan (environment variables)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk mendefinisikan variabel global dalam program</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="question5" class="h-5 w-5 text-green-500">
                        <span class="ml-2 text-gray-700">Untuk mengakses data dari file eksternal</span>
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
