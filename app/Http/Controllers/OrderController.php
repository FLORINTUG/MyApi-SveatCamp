<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{

    // All Ordes list 

    public function list()
    {
        $orders = Order::all();

        return response()->json($orders);

    }


    // Show order by id

    public function show($id)
    {
        $order = Order::find($id);
        return response()->json($order);
    }

    // Create order

    public function create(Request $request) 
    {
        $data = $request->all();

        $order = Order::createOrder($data);

        return response()->json($order, 201);
    }

    
}
