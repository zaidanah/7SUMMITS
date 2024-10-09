<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>7SUMMIT</title>
    <link rel="shortcut icon" type="x-icon" href="../src/images/logo7summitweb.png" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  
  <body class="font-sans text-gray-700">

    <!-- Navbar -->
    <nav id="navbar" class="flex justify-between items-center p-4 bg-black">
      <a href="#">
        <img src="../src/images/Logo1.png" alt="logo7summit" class="h-10" />
      </a>
      <ul class="flex space-x-6">
        <li><a href="#explore" class="text-white hover: text-orange-600">Explore</a></li>
        <li><a href="#about" class="text-white hover: text-orange-600">About Us</a></li>
        <li><a href="#community" class="text-white hover: text-orange-600">Community</a></li>
      </ul>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="h-screen bg-cover bg-center" style="background-image: ../src/images/bghero.png;">
      <div class="h-full flex flex-col justify-center items-center text-center text-white bg-black bg-opacity-50">
        <h1 class="text-4xl font-bold mb-4">Discover the Majestic Mountains of Indonesia</h1>
        <p class="text-lg mb-6">Explore the breathtaking landscapes and majestic mountains of Indonesia...</p>
        <button class="bg-orange-600 hover:bg-orange-400 text-white py-2 px-6 rounded">Explore Now!</button>
      </div>
    </section>

    <!-- Explore Section -->
    <section id="explore" class="py-16 px-8 bg-gray-100">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-4">Journey Through Indonesia’s Most Stunning Mountains</h2>
        <p class="mb-8">Prepare yourself for an unforgettable experience. Let's start your adventure today!</p>
        <div class="flex items-center space-x-4 mb-8">
          <button class="flex items-center bg-gray-200 hover:bg-gray-300 text-gray-700 py-2 px-4 rounded">
            <img src="images/icon-search.png" alt="Search Icon" class="h-5 mr-2" />
            Search your destination
          </button>
          <a href="more.html" class="text-green-500 hover:text-green-600">See More</a>
        </div>

        <!-- Card Carousel -->
        <div class="relative">
          <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 shadow rounded-full">&#10094;</button>
          <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 overflow-hidden">
            <div class="bg-white shadow rounded-lg overflow-hidden">
              <img src="images/mountain1.png" alt="Mountain 1" class="w-full h-48 object-cover">
              <div class="p-4">
                <h3 class="text-xl font-semibold">Puncak Semeru</h3>
                <p class="text-gray-500">3.676 mdpl</p>
                <p class="text-gray-500">Kabupaten Malang, Jawa Timur</p>
              </div>
            </div>
            <!-- More mountain cards... -->
          </div>
          <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 shadow rounded-full">&#10095;</button>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 px-8 bg-white">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-4">Start Your Journey</h2>
        <p class="mb-8">7SUMMIT makes it easy for you to explore and enjoy Indonesia’s mountains...</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-gray-100 p-6 rounded-lg shadow">
            <img src="images/Mountains.png" alt="Mountain Profiles Icon" class="h-12 mx-auto mb-4">
            <h3 class="text-xl font-semibold mb-2">Mountain Profiles</h3>
            <p class="text-gray-600">Discover comprehensive details, fascinating facts...</p>
          </div>
          <!-- More about cards... -->
        </div>
      </div>
    </section>

    <!-- Community Section -->
    <section id="community" class="py-16 px-8 bg-gray-100">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2">
          <img src="images/community.png" alt="Community Image" class="w-full h-auto">
        </div>
        <div class="md:w-1/2 md:pl-8">
          <h2 class="text-3xl font-bold mb-4">Join the 7SUMMIT Community</h2>
          <p class="mb-6">Connect with fellow adventurers, share your experiences, and get personalized recommendations...</p>
          <button class="bg-green-500 hover:bg-green-600 text-white py-2 px-6 rounded">Join Now!</button>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="py-8 bg-gray-800 text-white">
      <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="footer-logo">
          <img src="images/Logo1.png" alt="7SUMMIT Logo" class="h-10" />
        </div>
        <div class="footer-links flex space-x-6">
          <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
          <a href="#" class="text-gray-400 hover:text-white">Terms and Conditions</a>
          <a href="#" class="text-gray-400 hover:text-white">Cookie Policy</a>
        </div>
        <div class="footer-social flex space-x-4">
          <div class="social-icon youtube-icon">YT</div>
          <div class="social-icon instagram-icon">IG</div>
          <div class="social-icon twitter-icon">TW</div>
        </div>
      </div>
      <p class="text-center text-gray-500 mt-4">© 2024 7SUMMIT. All rights reserved.</p>
    </footer>

  </body>
</html>
