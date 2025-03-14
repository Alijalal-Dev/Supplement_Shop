<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index(){
        $employeescount = Employee::all()->count();
        $Supplementcount = Product::where('type', 'supplement')->get()->count();
        $accesoirecount = Product::where('type', 'accesoire')->get()->count();
        $orderscount = Order::all()->count();

        // Fetch income data for the last 7 days
    $dates = collect(range(6, 0))->map(function ($i) {
        return now()->subDays($i)->format('Y-m-d');
    });

    $incomeData = $dates->map(function ($date) {
        return Order::where('status', 'complete')
                    ->whereDate('created_at', $date)
                    ->sum('total_price');
    });

        return view('dashboard.index', compact('employeescount', 'Supplementcount', 'accesoirecount', 'orderscount','dates', 'incomeData'));
    }
}
