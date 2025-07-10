<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOrders = Order::count();
        $totalSales = Order::where('Status', 1)->sum('total_price');
        $totalProducts = Product::count();
        $totalUsers = User::count();

        return view('admin.dashboard', [
            'totalOrders' => $totalOrders,
            'totalSales' => $totalSales,
            'totalProducts' => $totalProducts,
            'totalUsers' => $totalUsers,
        ]);
    }
}