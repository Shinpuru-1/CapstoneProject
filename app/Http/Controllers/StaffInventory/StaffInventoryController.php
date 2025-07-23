<?php
namespace App\Http\Controllers\StaffInventory;

use App\Models\Inventory;
use App\Http\Controllers\Controller;

class StaffInventoryController extends Controller
{
    public function index()
    {
        $items = Inventory::all();
        return view('staff.staffinventory', compact('items'));
    }
}