    <!-- Sidebar -->
    <div class="w-64 bg-[#c2946f] text-white flex-shrink-0">
      <div class="h-16 flex items-center justify-center text-2xl">
        Admin Panel
      </div>
      <nav class="mt-4">
        <ul class="space-y-4 px-4">
          <li>
            <a href="{{route('dashboard')}}" class="block px-4 py-2 rounded-md hover:bg-[#9e7a4f]">Dashboard</a>
          </li>
          <li>
            <a href="{{route('products')}}" class="block px-4 py-2 rounded-md hover:bg-[#9e7a4f]">Products</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 rounded-md hover:bg-[#9e7a4f]">Orders</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 rounded-md hover:bg-[#9e7a4f]">Users</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 rounded-md hover:bg-[#9e7a4f]">Settings</a>
          </li>
          <li>
            <a href="{{route('home')}}" class="block px-4 py-2 rounded-md hover:bg-[#9e7a4f]">Go back to Home</a>
          </li>
        </ul>
      </nav>
    </div>