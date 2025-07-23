<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            sidebar: '#9A7700',
          }
        }
      }
    }
  </script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="flex h-screen bg-gray-100">

  <!-- Sidebar -->
  <aside class="w-64 bg-sidebar text-white flex flex-col">
    <div class="p-6 text-2xl font-semibold border-b border-gray-700">
      Admin Panel
    </div>
    <nav class="flex-1 p-4 space-y-2">
      <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="home" class="w-5 h-5"></i><span>Dashboard</span>
      </a>
      <a href="{{ route('admin.customers') }}" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="users" class="w-5 h-5"></i><span>Manage Customers</span>
      </a>
      <a href="{{ route('admin.staff') }}" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="user-check" class="w-5 h-5"></i><span>Manage Staff</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="package" class="w-5 h-5"></i><span>Manage Products</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="layers" class="w-5 h-5"></i><span>Manage Inventory</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="shopping-cart" class="w-5 h-5"></i><span>Manage Orders</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="bar-chart-2" class="w-5 h-5"></i><span>Report</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="map-pin" class="w-5 h-5"></i><span>Order Tracking</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="user" class="w-5 h-5"></i><span>Profile</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-gray-700">
        <i data-feather="settings" class="w-5 h-5"></i><span>System Setting</span>
      </a>
    </nav>
    <div class="p-4 border-t border-gray-700">
      <a href="{{ route('login') }}" class="flex items-center space-x-3 px-4 py-2 rounded hover:bg-red-600 text-red-400 hover:text-white">
        <i data-feather="log-out" class="w-5 h-5"></i><span>Logout</span>
      </a>
    </div>
  </aside>
<!-- Main Content -->
<!-- Main Content -->
<main class="flex-1 p-8 overflow-y-auto">
  <div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Manage Customers</h1>
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
      + Add Customer
    </button>
  </div>

  <!-- Customers Table -->
  <div class="bg-white rounded-xl shadow overflow-x-auto">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-100 text-gray-700">
        <tr>
          <th class="px-6 py-3">Customer ID</th>
          <th class="px-6 py-3">Name</th>
          <th class="px-6 py-3">Email</th>
          <th class="px-6 py-3">Phone</th>
          <th class="px-6 py-3">Status</th>
          <th class="px-6 py-3 text-center">Actions</th>
        </tr>
      </thead>
      <tbody class="text-gray-800">
        <!-- Sample Customer Row -->
        <tr class="border-t">
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4">
            <span class="text-green-600 font-medium"></span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <a href="#customerView" class="text-indigo-600 hover:underline">View</a>
            <a href="#" class="text-blue-600 hover:underline">Edit</a>
            <a href="#" class="text-red-600 hover:underline">Delete</a>
          </td>
        </tr>
        <!-- Add more static rows as needed -->
      </tbody>
    </table>
  </div>

  <!-- Customer Detail View (Static) -->

</main>




  <script>
    feather.replace(); // load icons
  </script>

</body>
</html>
