<!-- Main Content -->
<main class="flex-1 p-8 overflow-y-auto">
  <!-- Orders Dashboard Summary -->
  <div class="mb-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Orders Dashboard</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <!-- Total Orders -->
      <div class="bg-blue-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="shopping-cart" class="w-8 h-8 text-blue-600 mb-2"></i>
        <div class="text-3xl font-bold text-blue-700">1200</div>
        <div class="text-gray-700 mt-1 text-center">Total Orders</div>
      </div>
      <!-- Pending Orders -->
      <div class="bg-yellow-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="clock" class="w-8 h-8 text-yellow-600 mb-2"></i>
        <div class="text-3xl font-bold text-yellow-700">45</div>
        <div class="text-gray-700 mt-1 text-center">
          <i data-feather="clock" class="w-4 h-4 inline mr-1"></i>Pending
        </div>
      </div>
      <!-- Completed Orders -->
      <div class="bg-green-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="check-circle" class="w-8 h-8 text-green-600 mb-2"></i>
        <div class="text-3xl font-bold text-green-700">1100</div>
        <div class="text-gray-700 mt-1 text-center">
          <i data-feather="check-circle" class="w-4 h-4 inline mr-1"></i>Completed
        </div>
      </div>
      <!-- Cancelled Orders -->
      <div class="bg-red-100 rounded-xl shadow p-6 flex flex-col items-center">
        <i data-feather="x-circle" class="w-8 h-8 text-red-600 mb-2"></i>
        <div class="text-3xl font-bold text-red-700">55</div>
        <div class="text-gray-700 mt-1 text-center">
          <i data-feather="x-circle" class="w-4 h-4 inline mr-1"></i>Cancelled
        </div>
      </div>
    </div>
  </div>

  <div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-gray-800 flex items-center">
      <i data-feather="list" class="w-7 h-7 mr-2 text-blue-600"></i>
      Manage Orders
    </h1>
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow flex items-center">
      <i data-feather="plus" class="w-4 h-4 mr-1"></i>
      Add Order
    </button>
  </div>

  <!-- Orders Table -->
  <div class="bg-white rounded-xl shadow overflow-x-auto">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-100 text-gray-700">
        <tr>
          <th class="px-6 py-3"><i data-feather="hash" class="w-4 h-4 inline mr-1"></i>Order ID</th>
          <th class="px-6 py-3"><i data-feather="user" class="w-4 h-4 inline mr-1"></i>Customer</th>
          <th class="px-6 py-3"><i data-feather="calendar" class="w-4 h-4 inline mr-1"></i>Date</th>
          <th class="px-6 py-3"><i data-feather="dollar-sign" class="w-4 h-4 inline mr-1"></i>Total</th>
          <th class="px-6 py-3"><i data-feather="activity" class="w-4 h-4 inline mr-1"></i>Status</th>
          <th class="px-6 py-3 text-center"><i data-feather="settings" class="w-4 h-4 inline mr-1"></i>Actions</th>
        </tr>
      </thead>
      <tbody class="text-gray-800">
        <!-- Sample Order Row -->
        <tr class="border-t">
          <td class="px-6 py-4">ORD-1001</td>
          <td class="px-6 py-4 flex items-center gap-2">
            <i data-feather="user" class="w-4 h-4 text-blue-500"></i>
            Juan Dela Cruz
          </td>
          <td class="px-6 py-4">2025-07-24</td>
          <td class="px-6 py-4">₱1,200.00</td>
          <td class="px-6 py-4">
            <span class="inline-block px-2 py-1 text-xs rounded bg-yellow-100 text-yellow-700">
              <i data-feather="clock" class="w-3 h-3 inline mr-1"></i>Pending
            </span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <a href="#" class="inline-flex items-center px-2 py-1 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">
              <i data-feather="check" class="w-4 h-4 mr-1"></i>Mark as Complete
            </a>
            <a href="#" class="inline-flex items-center px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">
              <i data-feather="x" class="w-4 h-4 mr-1"></i>Cancel
            </a>
            <a href="#" class="inline-flex items-center px-2 py-1 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 text-xs">
              <i data-feather="eye" class="w-4 h-4 mr-1"></i>View
            </a>
          </td>
        </tr>
        <!-- Add more order rows as needed -->
      </tbody>
    </table>
  </div>
</main>