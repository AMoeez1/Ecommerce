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
            <h2 class="text-3xl font-extrabold bg-[#c2946f] p-2 rounded text-white shadow-sm">Create Your Account</h2>
            <p class="mt-2 text-gray-600 text-lg">Join our community and start shopping!</p>
          </div>
        
          <form action="#" method="POST" class="space-y-6">
        
            <!-- Full Name -->
            <div>
              <label for="full-name" class="block text-sm font-medium text-gray-700">Full Name</label>
              <input type="text" id="full-name" name="full-name" required placeholder="Enter your full name" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#c2946f] focus:border-[#c2946f] focus:outline-none transition duration-300 ease-in-out transform hover:shadow-lg" />
            </div>
        
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
        
            <!-- Address -->
            <div>
              <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
              <textarea id="address" name="address" rows="3" placeholder="Enter your address" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#c2946f] focus:border-[#c2946f] focus:outline-none transition duration-300 ease-in-out transform hover:shadow-lg"></textarea>
            </div>
        
            <!-- Phone Number -->
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
              <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#c2946f] focus:border-[#c2946f] focus:outline-none transition duration-300 ease-in-out transform hover:shadow-lg" />
            </div>
        
            <!-- Date of Birth -->
            <div>
              <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
              <input type="date" id="dob" name="dob" required class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#c2946f] focus:border-[#c2946f] focus:outline-none transition duration-300 ease-in-out transform hover:shadow-lg" />
            </div>
        
            <!-- Gender -->
            <div class="mt-4">
              <span class="text-sm font-medium text-gray-700">Gender</span>
              <div class="flex items-center space-x-6 mt-2">
                <div class="flex items-center">
                  <input type="radio" id="male" name="gender" value="male" class="h-4 w-4 text-[#c2946f] border-gray-300 rounded focus:ring-[#c2946f]" />
                  <label for="male" class="ml-2 text-sm text-gray-600">Male</label>
                </div>
                <div class="flex items-center">
                  <input type="radio" id="female" name="gender" value="female" class="h-4 w-4 text-[#c2946f] border-gray-300 rounded focus:ring-[#c2946f]" />
                  <label for="female" class="ml-2 text-sm text-gray-600">Female</label>
                </div>
                <div class="flex items-center">
                  <input type="radio" id="other" name="gender" value="other" class="h-4 w-4 text-[#c2946f] border-gray-300 rounded focus:ring-[#c2946f]" />
                  <label for="other" class="ml-2 text-sm text-gray-600">Other</label>
                </div>
              </div>
            </div>
        
            <!-- Submit Button -->
            <button type="submit" class="w-full py-3 px-4 bg-[#c2946f] text-white rounded-md shadow-lg hover:bg-[#9e7a4f] focus:ring-2 focus:ring-[#c2946f] focus:ring-opacity-50 transition duration-300 ease-in-out transform hover:scale-105">
              Register
            </button>
        
          </form>
        
          <div class="text-center mt-6">
            <p class="text-sm text-gray-500">Already have an account? 
              <a href="/login" class="text-[#c2946f] hover:text-[#9e7a4f] transition duration-200 ease-in-out">Login</a>
            </p>
          </div>

 
    </div>
  </div>

</body>
</html>
