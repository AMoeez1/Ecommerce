<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Register Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-[#f9f9f9] to-[#e0e0e0] font-sans">

  <div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-2xl transform hover:scale-105 transition-all duration-300 ease-in-out p-8 space-y-6">

      <div class="text-center">
        <h2 class="text-3xl font-extrabold text-white p-2 rounded bg-[#c2946f] shadow-sm">Welcome Back!</h2>
        <p class="mt-2 text-gray-600 text-lg">Please log in to your account</p>
      </div>

      <form action="#" method="POST" class="space-y-6">

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
          <input type="email" id="email" name="email" required placeholder="Enter your email" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#c2946f] focus:border-[#c2946f] focus:outline-none transition duration-300 ease-in-out transform hover:shadow-lg" />
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" required placeholder="Enter your password" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#c2946f] focus:border-[#c2946f] focus:outline-none transition duration-300 ease-in-out transform hover:shadow-lg" />
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input type="checkbox" id="remember" class="h-4 w-4 text-[#c2946f] border-gray-300 rounded focus:ring-[#c2946f]" />
            <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
          </div>
          <a href="#" class="text-sm text-[#c2946f] hover:text-[#9e7a4f] transition duration-200 ease-in-out">Forgot password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full py-3 px-4 bg-[#c2946f] text-white rounded-md shadow-lg hover:bg-[#9e7a4f] focus:ring-2 focus:ring-[#c2946f] focus:ring-opacity-50 transition duration-300 ease-in-out transform hover:scale-105">
          Login
        </button>

      </form>

      <div class="text-center mt-6">
        <p class="text-sm text-gray-500">Don't have an account? 
          <a href="/register" class="text-[#c2946f] hover:text-[#9e7a4f] transition duration-200 ease-in-out">Sign up</a>
        </p>
      </div>
    </div>
  </div>

</body>
</html>
