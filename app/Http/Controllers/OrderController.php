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

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $order = Order::find($id);
        $order->update($data);
        return response()->json($order);
    }

    public function cancel($id) 
    {
        $order = Order::find($id);
        $order->status = 'canceled';
        $order->save();
        return response()->json($order);
    }


    
}
