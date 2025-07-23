

  <!-- Main Content -->
  <main class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Overview</h1>

    <!-- Example content boxes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold text-gray-700">Total Customers</h2>
        <p class="mt-2 text-3xl font-bold text-blue-600">1,245</p>
      </div>

      <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold text-gray-700">Pending Orders</h2>
        <p class="mt-2 text-3xl font-bold text-yellow-500">58</p>
      </div>

      <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold text-gray-700">Inventory Stock</h2>
        <p class="mt-2 text-3xl font-bold text-green-500">3,210</p>
      </div>
    </div>

    <div class="mt-10">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Recent Orders</h2>
      <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full table-auto text-left text-sm">
          <thead class="bg-gray-100 text-gray-600">
            <tr>
              <th class="px-6 py-3">Order ID</th>
              <th class="px-6 py-3">Customer</th>
              <th class="px-6 py-3">Status</th>
              <th class="px-6 py-3">Date</th>
              <th class="px-6 py-3">Total</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="border-t">
              <td class="px-6 py-4">#ORD1234</td>
              <td class="px-6 py-4">Lloyd Casquio</td>
              <td class="px-6 py-4 text-yellow-600">Pending</td>
              <td class="px-6 py-4">2025-07-16</td>
              <td class="px-6 py-4">₱129.99</td>
            </tr>
            <tr class="border-t">
              <td class="px-6 py-4">#ORD1235</td>
              <td class="px-6 py-4">Jeremy Suyat</td>
              <td class="px-6 py-4 text-green-600">Completed</td>
              <td class="px-6 py-4">2025-07-15</td>
              <td class="px-6 py-4">₱89.00</td>
            </tr>
          </tbody>
        </table>
      </div> <!-- End of Recent Orders -->

      <!-- Sales Graph -->
      <div class="mt-10">
        <div class="flex items-center justify-between mb-4">
          <h2 class="text-2xl font-semibold text-gray-800">Sales</h2>
          <div class="flex items-center space-x-2">
            <select id="salesView" class="border rounded px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="daily">Daily</option>
              <option value="weekly">Weekly</option>
              <option value="monthly" selected>Monthly</option>
              <option value="yearly">Yearly</option>
            </select>
            <input 
              type="date" 
              id="salesDate" 
              class="border rounded px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>
        <div class="bg-white rounded-xl shadow p-6 flex flex-col md:flex-row items-center justify-between">
          <div class="w-full md:w-1/2 flex justify-center">
            <canvas id="salesChart" height="200"></canvas>
          </div>
          <div class="w-full md:w-1/2 mt-8 md:mt-0 flex justify-center">
            <canvas id="smallChart" height="50" width="50"></canvas>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>
    feather.replace(); // load icons
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Sales Bar Graph
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
          label: 'Sales (₱)',
          data: [1200, 1900, 3000, 2500, 2200, 2700, 3200],
          backgroundColor: 'rgba(59, 130, 246, 0.7)',
          borderColor: [
            'rgba(59, 130, 246, 1)',
            'rgba(16, 185, 129, 1)',
            'rgba(245, 158, 11, 1)',
            'rgba(239, 68, 68, 1)',
            'rgba(168, 85, 247, 1)',
            'rgba(251, 191, 36, 1)',
            'rgba(34, 197, 94, 1)'
          ],
          borderWidth: 3, // Thicker border for bar graph
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

    // Small Pie Chart
    const smallCtx = document.getElementById('smallChart').getContext('2d');
    new Chart(smallCtx, {
      type: 'pie',
      data: {
        labels: ['Direct', 'Referral', 'Social Media', 'Email'],
        datasets: [{
          label: 'Traffic Sources',
          data: [300, 50, 100, 40],
          backgroundColor: [
            'rgba(59, 130, 246, 0.7)',
            'rgba(34, 197, 94, 0.7)',
            'rgba(234, 179, 8, 0.7)',
            'rgba(239, 68, 68, 0.7)'
          ],
          borderColor: [
            'rgba(255,255,255,1)',
            'rgba(255,255,255,1)',
            'rgba(255,255,255,1)',
            'rgba(255,255,255,1)'
          ],
          borderWidth: 6, // Thicker white border for pie chart
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
