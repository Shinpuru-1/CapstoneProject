

  <!-- Main Content -->
  <main class="flex-1 p-8 overflow-y-auto">
    <!-- Product Dashboard Summary (Top) -->
    <div class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Product Dashboard</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Total Ready Made Products -->
        <div class="bg-green-100 rounded-xl shadow p-6 flex flex-col items-center">
          <i data-feather="box" class="w-8 h-8 text-green-600 mb-2"></i>
          <div class="text-3xl font-bold text-green-700">120</div>
          <div class="text-gray-700 mt-1 text-center">Ready Made Products</div>
        </div>
        <!-- Total Stocks -->
        <div class="bg-blue-100 rounded-xl shadow p-6 flex flex-col items-center">
          <i data-feather="layers" class="w-8 h-8 text-blue-600 mb-2"></i>
          <div class="text-3xl font-bold text-blue-700">530</div>
          <div class="text-gray-700 mt-1 text-center">Total Stocks</div>
        </div>
        <!-- Pending 3D Customization -->
        <div class="bg-yellow-100 rounded-xl shadow p-6 flex flex-col items-center">
          <i data-feather="clock" class="w-8 h-8 text-yellow-600 mb-2"></i>
          <div class="text-3xl font-bold text-yellow-700">8</div>
          <div class="text-gray-700 mt-1 text-center">Pending 3D Customization</div>
        </div>
        <!-- Out of Stock Products -->
        <div class="bg-red-100 rounded-xl shadow p-6 flex flex-col items-center">
          <i data-feather="alert-triangle" class="w-8 h-8 text-red-600 mb-2"></i>
          <div class="text-3xl font-bold text-red-700">3</div>
          <div class="text-gray-700 mt-1 text-center">Out of Stock</div>
        </div>
      </div>
    </div>

    <h1 class="text-3xl font-bold text-gray-800 mb-6">Manage Products</h1>

    <!-- 3D Customization Products Table -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-semibold text-blue-700 flex items-center">
          <i data-feather="cube" class="w-5 h-5 mr-2"></i>3D Customization Products
        </h2>
        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm flex items-center">
          <i data-feather="plus" class="w-4 h-4 mr-1"></i>Add Product
        </a>
      </div>
      <div class="mb-4 flex flex-col md:flex-row md:items-center md:justify-between gap-2">
        <input type="text" placeholder="Search 3D products..." class="border rounded px-3 py-2 w-full md:w-1/2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <select class="border rounded px-3 py-2 w-full md:w-1/4 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">All Categories</option>
          <option value="Mugs">Mugs</option>
          <option value="Keychains">Keychains</option>
        </select>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto text-left text-sm">
          <thead class="bg-gray-100 text-gray-600">
            <tr>
              <th class="px-4 py-2">Image</th>
              <th class="px-4 py-2">Product Name</th>
              <th class="px-4 py-2">Category</th>
              <th class="px-4 py-2">Price</th>
              <th class="px-4 py-2">Stock</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Actions</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="border-t hover:bg-blue-50">
              <td class="px-4 py-2">
                <img src="https://placehold.co/40x40" alt="3D Mug" class="rounded" />
              </td>
              <td class="px-4 py-2">Custom 3D Mug</td>
              <td class="px-4 py-2">Mugs</td>
              <td class="px-4 py-2">₱299.00</td>
              <td class="px-4 py-2">50</td>
              <td class="px-4 py-2">
                <span class="inline-block px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
              </td>
              <td class="px-4 py-2 flex gap-2">
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
            <tr class="border-t hover:bg-blue-50">
              <td class="px-4 py-2">
                <img src="https://placehold.co/40x40" alt="3D Keychain" class="rounded" />
              </td>
              <td class="px-4 py-2">Custom 3D Keychain</td>
              <td class="px-4 py-2">Keychains</td>
              <td class="px-4 py-2">₱149.00</td>
              <td class="px-4 py-2">30</td>
              <td class="px-4 py-2">
                <span class="inline-block px-2 py-1 text-xs rounded bg-yellow-100 text-yellow-700">Pending</span>
              </td>
              <td class="px-4 py-2 flex gap-2">
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
            <!-- Add more 3D customization products here -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Ready Made Products Table -->
    <div class="bg-white rounded-xl shadow p-6">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-semibold text-green-700 flex items-center">
          <i data-feather="box" class="w-5 h-5 mr-2"></i>Ready Made Products
        </h2>
        <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-sm flex items-center">
          <i data-feather="plus" class="w-4 h-4 mr-1"></i>Add Product
        </a>
      </div>
      <div class="mb-4 flex flex-col md:flex-row md:items-center md:justify-between gap-2">
        <input type="text" placeholder="Search ready made products..." class="border rounded px-3 py-2 w-full md:w-1/2 focus:outline-none focus:ring-2 focus:ring-green-500" />
        <select class="border rounded px-3 py-2 w-full md:w-1/4 focus:outline-none focus:ring-2 focus:ring-green-500">
          <option value="">All Categories</option>
          <option value="Mugs">Mugs</option>
          <option value="Keychains">Keychains</option>
        </select>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto text-left text-sm">
          <thead class="bg-gray-100 text-gray-600">
            <tr>
              <th class="px-4 py-2">Image</th>
              <th class="px-4 py-2">Product Name</th>
              <th class="px-4 py-2">Category</th>
              <th class="px-4 py-2">Price</th>
              <th class="px-4 py-2">Stock</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Actions</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="border-t hover:bg-green-50">
              <td class="px-4 py-2">
                <img src="https://placehold.co/40x40" alt="White Mug" class="rounded" />
              </td>
              <td class="px-4 py-2">Classic White Mug</td>
              <td class="px-4 py-2">Mugs</td>
              <td class="px-4 py-2">₱99.00</td>
              <td class="px-4 py-2">100</td>
              <td class="px-4 py-2">
                <span class="inline-block px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
              </td>
              <td class="px-4 py-2 flex gap-2">
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
            <tr class="border-t hover:bg-green-50">
              <td class="px-4 py-2">
                <img src="https://placehold.co/40x40" alt="Keychain Set" class="rounded" />
              </td>
              <td class="px-4 py-2">Keychain Set</td>
              <td class="px-4 py-2">Keychains</td>
              <td class="px-4 py-2">₱59.00</td>
              <td class="px-4 py-2">0</td>
              <td class="px-4 py-2">
                <span class="inline-block px-2 py-1 text-xs rounded bg-red-100 text-red-700">Out of Stock</span>
              </td>
              <td class="px-4 py-2 flex gap-2">
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
            <!-- Add more ready made products here -->
          </tbody>
        </table>
      </div>
    </div>

  
  </main>

  <script>
    feather.replace(); // load icons
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Product Bar Graph
    const ctx = document.getElementById('productChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['3D Mugs', '3D Keychains', 'Ready Mugs', 'Ready Keychains'],
        datasets: [{
          label: 'Stock',
          data: [120, 80, 200, 150],
          backgroundColor: [
            'rgba(59, 130, 246, 0.7)',
            'rgba(16, 185, 129, 0.7)',
            'rgba(245, 158, 11, 0.7)',
            'rgba(239, 68, 68, 0.7)'
          ],
          borderColor: [
            'rgba(59, 130, 246, 1)',
            'rgba(16, 185, 129, 1)',
            'rgba(245, 158, 11, 1)',
            'rgba(239, 68, 68, 1)'
          ],
          borderWidth: 3,
          borderRadius: 8,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false }
        },
        scales: {
          y: { beginAtZero: true }
        }
      }
    });

    // Product Pie Chart
    const pieCtx = document.getElementById('productPieChart').getContext('2d');
    new Chart(pieCtx, {
      type: 'pie',
      data: {
        labels: ['3D Customization', 'Ready Made'],
        datasets: [{
          label: 'Product Type',
          data: [200, 350],
          backgroundColor: [
            'rgba(59, 130, 246, 0.7)',
            'rgba(16, 185, 129, 0.7)'
          ],
          borderColor: [
            'rgba(255,255,255,1)',
            'rgba(255,255,255,1)'
          ],
          borderWidth: 6,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              color: '#374151',
              font: {
                size: 14,
                weight: 'bold'
              }
            }
          }
        }
      }
    });
  </script>
</body>
</html>
