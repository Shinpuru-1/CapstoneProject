<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
        public function adminDashboard()
    {
        return view('template.adminheader') .
        view('admin.dashboard');
    }

        public function customers()
    {

        return view('template.adminheader') .
        view('admin.customers');
    }

       public function staff()
    {
        return view('template.adminheader') .
        view('admin.staff');
    }

       public function products()
    {
        return view('template.adminheader') .
        view('admin.products');
    }

        public function inventory()
    {
        return view('template.adminheader') .
        view('admin.inventory');
    }

        public function orders()
    {
        return view('template.adminheader') .
        view('admin.orders');
    }
    //       public function products()
    // {
    //     return view('admin.products');
    // }
}
