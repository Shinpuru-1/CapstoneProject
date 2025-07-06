<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <a href="#">Logout</a>
        </nav>
        <div class="flex-grow-1">
            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Welcome, Staff</span>
                </div>
            </nav>

            <!-- Dashboard Summary Cards -->
            <div class="container my-4">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card card-primary text-white">
                            <div class="card-body">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text fs-3">
                                    {{ $totalUsers ?? 0 }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-orange text-white">
                            <div class="card-body">
                                <h5 class="card-title">Total Earnings</h5>
                                <p class="card-text fs-3">
                                    ₱{{ number_format($totalEarnings ?? 0, 2) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graph Section -->
            <div class="container mb-5">
                <div class="card card-secondary">
                    <div class="card-body">
                        <h5 class="card-title text-white">Monthly Sales Overview</h5>
                        <canvas id="salesChart" height="80"></canvas>
                    </div>
                </div>
            </div>
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
    </div>
</body>
</html>