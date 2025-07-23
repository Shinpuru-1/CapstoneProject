<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
        public function adminDashboard()
    {
        return view('admin.dashboard');
    }

        public function customers()
    {
        return view('admin.customers');
    }

       public function staff()
    {
        return view('admin.staff');
    }
}
