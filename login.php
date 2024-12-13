<?php include('database.php'); ?>
<?php include('logincheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-[#202020]">
  <div class="bg-[#121212] p-6 rounded-lg shadow-lg w-96">
    <div class="flex flex-col items-center mb-6">
      <img src="assets/logo.png" alt="Spotify Logo" class="h-10 mb-4">
      <div class="flex space-x-4 text-[#F99E40]">
        <button class="text-white border-b-2 border-[#F99E40] pb-1">SIGN IN</button>
        <button class="hover:text-white">SIGN UP</button>
      </div>
    </div>
    <form action="logincheck.php" method="POST">
      <div class="mb-4">
        <label for="username" class="block text-sm text-[#F99E40] mb-1">Username</label>
        <input type="text" name="username" id="username" placeholder="Username" class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#F99E40]">
        <?php if (isset($_GET['error']) && $_GET['error'] == 'true'): ?>
        <p class="text-red-600">Username or password is incorrect.</p>
        <?php endif; ?>
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm text-[#F99E40] mb-1">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#F99E40]">
        <?php if (isset($_GET['error']) && $_GET['error'] == 'true'): ?>
        <p class="text-red-600">Username or password is incorrect.</p>
        <?php endif; ?>
      </div>
      <div class="flex items-center mb-4">
        <input type="checkbox" id="stay_signed_in" class="w-4 h-4 text-[#F99E40] rounded">
        <label for="stay_signed_in" class="ml-2 text-sm text-[#F99E40]">Stay signed in</label>
      </div>
      <button type="submit" name="signin" class="w-full bg-[#F99E40] text-white py-2 rounded-md hover:bg-[#F99E20] focus:outline-none focus:ring-2 focus:ring-[#F99E40]">
        SIGN IN
      </button>
      <div class="mt-4 text-center">
        <a href="#" class="text-sm text-[#F99E40] hover:text-white">Forgot Password?</a>
      </div>
    </form>
  </div>
</body>
</html>
