<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function index() {
    	$orders = Order::where('status', 1)->get();
    	// dd($orders);
    	return view('auth/orders/index', compact('orders'));
    }
    public function show(Order $order) {
    	if (!Auth::user()->orders->contains($order)) {
    		return back();
    	}
    	return view('auth.orders.show', compact('order'));
    }
}
