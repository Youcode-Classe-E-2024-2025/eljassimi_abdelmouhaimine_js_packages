<?php include('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Gestion JavaScript Packages</title>
</head>
<body class="bg-[#1B1B1F]">

  <nav class="relative text-white p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="w-36"><img src="assets/logo.png" alt=""></a>

            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-[#FF823E]">Home</a>
                <a href="#packages" class="hover:text-[#FF823E]">Packages</a>
                <a href="#authors" class="hover:text-[#FF823E]">Authors</a>
                <a href="#contact" class="hover:text-[#FF823E]">Contact</a>
            </div>

            <div class="md:hidden">
                <button id="menu-btn" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <div id="mobile-menu" class="md:hidden absolute z-10 w-full hidden bg-[#FF823E] text-white p-4">
        <div class="flex flex-col space-y-4">
            <a href="#" class="hover:text-[#FF823E]">Home</a>
            <a href="#packages" class="hover:text-[#FF823E]">Packages</a>
            <a href="#authors" class="hover:text-[#FF823E]">Authors</a>
            <a href="#contact" class="hover:text-[#FF823E]">Contact</a>
        </div>
    </div>


  
  <main class="max-w-4xl mx-auto mt-8 p-4 bg-white shadow rounded">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold">ALL PACKAGES</h2>
      <button id="openModal" class="bg-[#FF823E] text-white px-4 py-2 rounded hover:bg-[#F99E40]">ADD PACKAGE</button>
    </div>

    
    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-200">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Package name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Autor name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Version</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Update</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Delete</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </main>
<script src="main.js"></script>t
</body>
</html>