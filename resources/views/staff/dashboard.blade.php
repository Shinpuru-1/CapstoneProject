<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary-gradient: linear-gradient(
                135deg,
                #1e3a8a 0%,
                #3730a3 50%,
                #1e40af 100%
            );
            --accent-color: #fbbf24;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f8fafc;
        }
        
        body { 
            min-height: 100vh; 
            background: var(--bg-light);
            color: var(--text-dark);
        }
        
        .sidebar {
            min-width: 220px;
            max-width: 220px;
            background: var(--primary-gradient);
            color: #fff;
            min-height: 100vh;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        
        .sidebar h4 {
            color: var(--accent-color);
            font-weight: 600;
            border-bottom: 2px solid var(--accent-color);
            padding-bottom: 10px;
        }
        
        .sidebar a, .sidebar .dropdown-toggle {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        
        .sidebar a:hover, .sidebar .dropdown-toggle:hover {
            background: rgba(251, 191, 36, 0.2);
            border-left-color: var(--accent-color);
            transform: translateX(5px);
        }
        
        .sidebar .dropdown-menu {
            background: #1e2b6f;
            border: none;
            margin-left: 10px;
            margin-bottom: 5px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .sidebar .dropdown-item {
            color: #fff;
            padding: 8px 30px;
            transition: all 0.3s ease;
            border-radius: 6px;
        }
        
        .sidebar .dropdown-item:hover {
            background: var(--accent-color);
            color: var(--text-dark);
        }
        
        .navbar {
            background: linear-gradient(90deg, #fff 0%, #f8fafc 100%) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            color: var(--text-dark) !important;
            font-weight: 600;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .card-primary {
            background: var(--primary-gradient);
        }
        
        .card-orange {
            background: linear-gradient(135deg, var(--accent-color) 0%, #f59e0b 100%);
        }
        
        .card-secondary {
            background: linear-gradient(135deg, #64748b 0%, #94a3b8 100%);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .card-text.fs-3 {
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Custom scrollbar for sidebar */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: #1e2b6f;
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: var(--accent-color);
            border-radius: 3px;
        }
        
        .sidebar::-webkit-scrollbar-thumb:hover {
            background: #f59e0b;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                min-width: 200px;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <nav class="sidebar flex-shrink-0">
            <h4 class="p-3">Staff Panel</h4>
            <a href="#">Dashboard</a>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown">Inventory</a>
                <ul class="dropdown-menu">
                    
                    <li><a class="dropdown-item" href="{{ route('staff.inventory') }}">View Inventory</a></li>
                    <li><a class="dropdown-item" href="#">Update Stock (Raw Materials)</a></li>
                    <li><a class="dropdown-item" href="#">Update Stock (Finished Product)</a></li>
                    <li><a class="dropdown-item" href="#">Check Low Stock Alerts</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown">Purchase Orders</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">View Assigned Orders</a></li>
                    <li><a class="dropdown-item" href="#">Update Order Status</a></li>
                    <li><a class="dropdown-item" href="#">Upload Receipt/Notes</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown">3D Printing Jobs</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">View 3D Models</a></li>
                    <li><a class="dropdown-item" href="#">Compute Printing Time & Material Needed</a></li>
                    <li><a class="dropdown-item" href="#">Update Job Progress</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown">Cost & Profit Estimator</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Compute Cost</a></li>
                    <li><a class="dropdown-item" href="#">View Estimated Profit</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown">Product Customization</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Assist in Customization Requests</a></li>
                    <li><a class="dropdown-item" href="#">Upload Design Files</a></li>
                    <li><a class="dropdown-item" href="#">Request Clarification from Customer</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown">Order Tracking</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Check Order Status</a></li>
                    <li><a class="dropdown-item" href="#">Update Tracking Details</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown">Reports</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Daily Sales Summary</a></li>
                    <li><a class="dropdown-item" href="#">Completed Orders</a></li>
                    <li><a class="dropdown-item" href="#">Printing Time Logs</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown">Profile/Settings</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                    <li><a class="dropdown-item" href="#">Update Personal Info</a></li>
                </ul>
            </div>
            <a href="{{ route('logout') }}">Logout</a>
        </nav>
        <div class="flex-grow-1">
            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                    <span class="navbar-brand mb-0 h1">Welcome, staff</span>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/profile.png') }}" alt="Profile" width="40" height="40" class="rounded-circle me-2" style="object-fit: cover;">
                            <span>My Profile</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#viewProfileModal">View Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editProfileModal" id="editProfileBtn">Edit Profile</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                        <!-- Edit Profile Modal -->
                        <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form method="POST" action="{{ url('staff.profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <!-- Profile Picture Upload -->
                                  <div class="mb-3 text-center">
                                    <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/profile.png') }}" 
                                         alt="Profile Picture" 
                                         class="rounded-circle mb-2" 
                                         width="80" height="80" 
                                         style="object-fit: cover;">
                                    <div>
                                      <input class="form-control mt-2" type="file" name="profile_picture" accept="image/*">
                                    </div>
                                  </div>
                                  <!-- Name -->
                                  <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name ?? '' }}">
                                  </div>
                                  <!-- Email -->
                                  <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email ?? '' }}">
                                  </div>
                                  <!-- Add more fields as needed -->
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <!-- View Profile Modal -->
                        <div class="modal fade" id="viewProfileModal" tabindex="-1" aria-labelledby="viewProfileModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="viewProfileModalLabel">My Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body text-center">
                                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/profile.png') }}"
                                     alt="Profile Picture"
                                     class="rounded-circle mb-3"
                                     width="100" height="100"
                                     style="object-fit: cover;">
                                <h5>{{ Auth::user()->name }}</h5>
                                <p class="mb-1">{{ Auth::user()->email }}</p>
                                <!-- Add more fields if needed -->
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Summary Cards -->
            <div class="container mt-4">
                <div class="row g-3 mb-4 justify-content-center">
                    <div class="col-6 col-md-2 d-flex">
                        <div class="card card-primary text-white text-center shadow flex-fill h-100">
                            <div class="card-body">
                                <div class="card-title fs-6">Total Users</div>
                                <div class="card-text fs-3">{{ $totalUsers ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 d-flex">
                        <div class="card card-orange text-white text-center shadow flex-fill h-100">
                            <div class="card-body">
                                <div class="card-title fs-6">Total Products</div>
                                <div class="card-text fs-3">{{ $totalProducts ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 d-flex">
                        <div class="card card-secondary text-white text-center shadow flex-fill h-100">
                            <div class="card-body">
                                <div class="card-title fs-6">Pending Requests</div>
                                <div class="card-text fs-3">{{ $pendingRequests ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 d-flex">
                        <div class="card card-primary text-white text-center shadow flex-fill h-100">
                            <div class="card-body">
                                <div class="card-title fs-6">Total for Delivery</div>
                                <div class="card-text fs-3">{{ $totalForDelivery ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 d-flex">
                        <div class="card card-orange text-white text-center shadow flex-fill h-100">
                            <div class="card-body">
                                <div class="card-title fs-6">Total for Pickup</div>
                                <div class="card-text fs-3">{{ $totalForPickup ?? 0 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Dashboard Summary Cards -->

            <!-- Graph Section -->

            <!-- Inventory Table Section -->
            <div class="container mt-4">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Inventory</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Item Name</th>
                                        <th>Category</th>
                                        <th>Stock</th>
                                        <th>Unit</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Sample static data, replace with @foreach($inventory as $item) --}}
                                    <tr>
                                        <td>1</td>
                                        <td>PLA Filament</td>
                                        <td>Raw Material</td>
                                        <td>25</td>
                                        <td>kg</td>
                                        <td><span class="badge bg-success">In Stock</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ABS Filament</td>
                                        <td>Raw Material</td>
                                        <td>5</td>
                                        <td>kg</td>
                                        <td><span class="badge bg-warning text-dark">Low Stock</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3D Printed Gear</td>
                                        <td>Finished Product</td>
                                        <td>12</td>
                                        <td>pcs</td>
                                        <td><span class="badge bg-success">In Stock</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>3D Printed Case</td>
                                        <td>Finished Product</td>
                                        <td>0</td>
                                        <td>pcs</td>
                                        <td><span class="badge bg-danger">Out of Stock</span></td>
                                    </tr>
                                    {{-- End sample data --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inventory Table Section -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Sample data, palitan ng dynamic data mula sa controller kung gusto mo
            const salesLabels = {!! json_encode($salesMonths ?? ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']) !!};
            const salesData = {!! json_encode($salesTotals ?? [12000, 15000, 10000, 18000, 22000, 17000]) !!};

            const ctx = document.getElementById('salesChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: salesLabels,
                    datasets: [{
                        label: 'Earnings (₱)',
                        data: salesData,
                        backgroundColor: 'rgba(251,191,36,0.8)',
                        borderColor: 'rgba(251,191,36,1)',
                        borderWidth: 2,
                        borderRadius: 8,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { color: '#fff' },
                            grid: { color: 'rgba(255,255,255,0.1)' }
                        },
                        x: {
                            ticks: { color: '#fff' },
                            grid: { color: 'rgba(255,255,255,0.05)' }
                        }
                    }
                }
            });
        </script>
    <script>
        // Toast notification function
        const showToast = (icon, message) => {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: icon,
                title: message
            });
        };

        // Show alerts for session messages
        @if(session('success'))
            showToast('success', '{{ session('success') }}');
        @endif

        @if(session('error'))
            showToast('error', '{{ session('error') }}');
        @endif

        @if($errors->any())
            showToast('error', '{{ $errors->first() }}');
        @endif
    </script>
    </div>
</body>
</html>