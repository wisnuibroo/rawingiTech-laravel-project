<nav>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <div class="bg-[#C0F8C2] shadow">
      <div class="container mx-auto px-4 py-4 flex justify-between items-center">

        <div class="flex items-center mt-6 lg:mt-0">
          <i class="fas fa-dove text-green-300 text-4xl"></i>
          <div class="text-lg font-bold text-black font-poppins ml-2">
            Rawingi Tech’s
          </div>
        </div>


        <nav class="flex space-x-6 font-medium text-black font-poppins">
          <a href="/home" class="nav-link text-black hover:text-green-500 border-b-2 border-transparent hover:border-green-500 focus:border-black active:border-black" aria-current="page">
            Home
          </a>
          <a href="/learn" class="nav-link text-black hover:text-green-500 border-b-2 border-transparent hover:border-green-500 focus:border-black">
            Learn
          </a>
          <a href="/profile" class="nav-link text-black hover:text-green-500 border-b-2 border-transparent hover:border-green-500 focus:border-black">
            Profile
          </a>
        </nav>


        <div>
          <a href="{{ route('login') }}" class="text-green hover:text-green-500 font-poppins">Log in</a>
          <a href="{{ route('signup') }}" class="bg-green-600 text-white px-4 py-2 rounded ml-2 hover:bg-green-700 font-poppins">
            Sign up
        </a>
        </div>
      </div>
    </div>
  </nav>

  <style>
    .nav-link[aria-current="page"] {
      color: #10B981;
      border-bottom-color: #10B981;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const links = document.querySelectorAll('.nav-link');
      const currentPath = window.location.pathname;

      links.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
          link.setAttribute('aria-current', 'page');
        } else {
          link.removeAttribute('aria-current');
        }
      });
    });
  </script>
