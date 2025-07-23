<!-- Main Content -->
<main class="flex-1 p-6 overflow-y-auto">
  <!-- Staff Dashboard Summary -->
  <div class="mb-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Staff Dashboard</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Total Staff -->
      <div class="bg-blue-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="users" class="w-8 h-8 text-blue-600 mb-2"></i>
        <div class="text-3xl font-bold text-blue-700">15</div>
        <div class="text-gray-700 mt-1 text-center">Total Staff</div>
      </div>
      <!-- Active Staff -->
      <div class="bg-green-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="user-check" class="w-8 h-8 text-green-600 mb-2"></i>
        <div class="text-3xl font-bold text-green-700">13</div>
        <div class="text-gray-700 mt-1 text-center">Active Staff</div>
      </div>
      <!-- Inactive Staff -->
      <div class="bg-yellow-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="user-x" class="w-8 h-8 text-yellow-600 mb-2"></i>
        <div class="text-3xl font-bold text-yellow-700">2</div>
        <div class="text-gray-700 mt-1 text-center">Inactive Staff</div>
      </div>
    
    </div>
  </div>

  <div class="mb-6">
    <h1 class="text-3xl font-semibold text-gray-800">Manage Staff</h1>
    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
      + Add Staff
    </button>
  </div>

  <!-- Staff Table -->
  <div class="overflow-x-auto bg-white rounded-lg shadow">
    <table class="min-w-full table-auto">
      <thead class="bg-gray-200 text-gray-600 text-left text-sm uppercase">
        <tr>
          <th class="px-6 py-3">ID</th>
          <th class="px-6 py-3">Name</th>
          <th class="px-6 py-3">Email</th>
          <th class="px-6 py-3">Role</th>
          <th class="px-6 py-3">Status</th>
          <th class="px-6 py-3">Actions</th>
        </tr>
      </thead>
      <tbody class="text-gray-700">
        <tr class="border-b hover:bg-gray-100">
          <td class="px-6 py-4">1</td>
          <td class="px-6 py-4">Juan Dela Cruz</td>
          <td class="px-6 py-4">juan@email.com</td>
          <td class="px-6 py-4">Admin</td>
          <td class="px-6 py-4">
            <span class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Active</span>
          </td>
          <td class="px-6 py-4 space-x-2">
            <button class="inline-flex items-center px-2 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 text-xs">
              <i data-feather="edit" class="w-4 h-4 mr-1"></i>Edit
            </button>
            <button class="inline-flex items-center px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">
              <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete
            </button>
            <button class="inline-flex items-center px-2 py-1 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 text-xs">
              <i data-feather="eye" class="w-4 h-4 mr-1"></i>View
            </button>
          </td>
        </tr>
        <!-- More rows as needed -->
      </tbody>
    </table>
  </div>
</main>

<script>
    feather.replace(); // load icons
  </script>

</body>
</html>
