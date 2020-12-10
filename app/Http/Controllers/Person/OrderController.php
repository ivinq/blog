<?php

namespace App\Http\Controllers\Person;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function index() {
    	$orders = Auth::user()->orders()->where('status', 1)->get();
    	// dd($orders);
    	return view('auth/orders/index', compact('orders'));
    }
    public function show(Order $order) {
    	return view('auth.orders.show', compact('order'));
    }
}
