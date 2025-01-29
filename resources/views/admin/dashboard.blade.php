@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
    <!-- Main Content Area -->
    <div class="flex-1 p-6">
      <!-- Dashboard Header -->
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl text-[#c2946f]">Dashboard</h2>
        <button class="bg-[#c2946f] text-white px-6 py-2 rounded-md hover:bg-[#9e7a4f]">Logout</button>
      </div>

      <!-- Dashboard Content -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Total Products -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h3 class="text-xl font-semibold">Total Products</h3>
          <p class="text-3xl font-bold mt-2">125</p>
        </div>

        <!-- Card 2: Total Orders -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h3 class="text-xl font-semibold">Total Orders</h3>
          <p class="text-3xl font-bold mt-2">56</p>
        </div>

        <!-- Card 3: Total Users -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h3 class="text-xl font-semibold">Total Users</h3>
          <p class="text-3xl font-bold mt-2">245</p>
        </div>
      </div>

      <!-- Table for Recent Orders -->
      <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">Recent Orders</h3>
        <table class="min-w-full table-auto border-collapse">
          <thead>
            <tr class="border-b">
              <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Order ID</th>
              <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Customer</th>
              <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Total</th>
              <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="px-4 py-2 text-sm">#001</td>
              <td class="px-4 py-2 text-sm">John Doe</td>
              <td class="px-4 py-2 text-sm">$150</td>
              <td class="px-4 py-2 text-sm text-green-500">Completed</td>
            </tr>
            <tr class="border-b">
              <td class="px-4 py-2 text-sm">#002</td>
              <td class="px-4 py-2 text-sm">Jane Smith</td>
              <td class="px-4 py-2 text-sm">$75</td>
              <td class="px-4 py-2 text-sm text-yellow-500">Pending</td>
            </tr>
            <tr class="border-b">
              <td class="px-4 py-2 text-sm">#003</td>
              <td class="px-4 py-2 text-sm">Alice Johnson</td>
              <td class="px-4 py-2 text-sm">$120</td>
              <td class="px-4 py-2 text-sm text-red-500">Cancelled</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection