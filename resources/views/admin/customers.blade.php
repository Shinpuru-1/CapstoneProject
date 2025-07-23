<!-- Main Content -->
<main class="flex-1 p-8 overflow-y-auto">
  <!-- Customers Dashboard Summary -->
  <div class="mb-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Customers Dashboard</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Total Customers -->
      <div class="bg-blue-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="users" class="w-8 h-8 text-blue-600 mb-2"></i>
        <div class="text-3xl font-bold text-blue-700">250</div>
        <div class="text-gray-700 mt-1 text-center">Total Customers</div>
      </div>
      <!-- Active Customers -->
      <div class="bg-green-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="user-check" class="w-8 h-8 text-green-600 mb-2"></i>
        <div class="text-3xl font-bold text-green-700">230</div>
        <div class="text-gray-700 mt-1 text-center">Active Customers</div>
      </div>
      <!-- Inactive Customers -->
      <div class="bg-yellow-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="user-x" class="w-8 h-8 text-yellow-600 mb-2"></i>
        <div class="text-3xl font-bold text-yellow-700">20</div>
        <div class="text-gray-700 mt-1 text-center">Inactive Customers</div>
      </div>
    </div>
  </div>

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
