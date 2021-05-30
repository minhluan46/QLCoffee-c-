<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
     public function index() {
    	return view('backend.orders.index');
    }
      public function editOrders() {
    	return view('backend.orders.edit_orders');
    }
}
