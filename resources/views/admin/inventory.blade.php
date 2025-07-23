<!-- Main Content -->
<main class="flex-1 p-8 overflow-y-auto">
  <!-- Inventory Dashboard Summary -->
  <div class="mb-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Inventory Dashboard</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <!-- Total Products -->
      <div class="bg-blue-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="box" class="w-8 h-8 text-blue-600 mb-2"></i>
        <div class="text-3xl font-bold text-blue-700">350</div>
        <div class="text-gray-700 mt-1 text-center">Total Products</div>
      </div>
      <!-- In Stock -->
      <div class="bg-green-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="check-circle" class="w-8 h-8 text-green-600 mb-2"></i>
        <div class="text-3xl font-bold text-green-700">320</div>
        <div class="text-gray-700 mt-1 text-center">In Stock</div>
      </div>
      <!-- Low Stock -->
      <div class="bg-yellow-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="alert-circle" class="w-8 h-8 text-yellow-600 mb-2"></i>
        <div class="text-3xl font-bold text-yellow-700">20</div>
        <div class="text-gray-700 mt-1 text-center">Low Stock</div>
      </div>
      <!-- Out of Stock -->
      <div class="bg-red-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="x-circle" class="w-8 h-8 text-red-600 mb-2"></i>
        <div class="text-3xl font-bold text-red-700">10</div>
        <div class="text-gray-700 mt-1 text-center">Out of Stock</div>
      </div>
    </div>
  </div>

  <div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-gray-800 flex items-center">
      <i data-feather="archive" class="w-7 h-7 mr-2 text-blue-600"></i>
      Manage Inventory
    </h1>
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow flex items-center">
      <i data-feather="plus" class="w-4 h-4 mr-1"></i>
      Add Inventory
    </button>
  </div>

  <!-- Inventory Table -->
  <div class="bg-white rounded-xl shadow overflow-x-auto">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-100 text-gray-700">
        <tr>
          <th class="px-6 py-3"><i data-feather="hash" class="w-4 h-4 inline mr-1"></i>Product ID</th>
          <th class="px-6 py-3"><i data-feather="tag" class="w-4 h-4 inline mr-1"></i>Product Name</th>
          <th class="px-6 py-3"><i data-feather="layers" class="w-4 h-4 inline mr-1"></i>Category</th>
          <th class="px-6 py-3"><i data-feather="package" class="w-4 h-4 inline mr-1"></i>Stock</th>
          <th class="px-6 py-3"><i data-feather="activity" class="w-4 h-4 inline mr-1"></i>Status</th>
          <th class="px-6 py-3 text-center"><i data-feather="settings" class="w-4 h-4 inline mr-1"></i>Actions</th>
        </tr>
      </thead>
      <tbody class="text-gray-800">
        <!-- Sample Inventory Row -->
        <tr class="border-t">
          <td class="px-6 py-4">101</td>
          <td class="px-6 py-4 flex items-center gap-2">
            <i data-feather="coffee" class="w-4 h-4 text-blue-500"></i>
            Classic White Mug
          </td>
          <td class="px-6 py-4">Mugs</td>
          <td class="px-6 py-4">100</td>
          <td class="px-6 py-4">
            <span class="inline-block px-2 py-1 text-xs rounded bg-green-100 text-green-700">
              <i data-feather="check-circle" class="w-3 h-3 inline mr-1"></i>In Stock
            </span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <a href="#" class="inline-flex items-center px-2 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 text-xs">
              <i data-feather="edit" class="w-4 h-4 mr-1"></i>Edit
            </a>
            <a href="#" class="inline-flex items-center px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">
              <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete
            </a>
            <a href="#" class="inline-flex items-center px-2 py-1 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 text-xs">
              <i data-feather="eye" class="w-4 h-4 mr-1"></i>View
            </a>
          </td>
        </tr>
        <tr class="border-t">
          <td class="px-6 py-4">102</td>
          <td class="px-6 py-4 flex items-center gap-2">
            <i data-feather="key" class="w-4 h-4 text-yellow-500"></i>
            Keychain Set
          </td>
          <td class="px-6 py-4">Keychains</td>
          <td class="px-6 py-4">0</td>
          <td class="px-6 py-4">
            <span class="inline-block px-2 py-1 text-xs rounded bg-red-100 text-red-700">
              <i data-feather="x-circle" class="w-3 h-3 inline mr-1"></i>Out of Stock
            </span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <a href="#" class="inline-flex items-center px-2 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 text-xs">
              <i data-feather="edit" class="w-4 h-4 mr-1"></i>Edit
            </a>
            <a href="#" class="inline-flex items-center px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">
              <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete
            </a>
            <a href="#" class="inline-flex items-center px-2 py-1 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 text-xs">
              <i data-feather="eye" class="w-4 h-4 mr-1"></i>View
            </a>
          </td>
        </tr>
        <!-- Add more inventory rows as needed -->
      </tbody>
    </table>
  </div>
</main>

<script>
  feather.replace(); // load icons
</script>