<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Read all products
    public function list()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Read by id
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    // Create product
    public function create(Request $request) 
    {
        $data= $request()->all();
    
        $product = Product::createProduct($data);

        return response()->json($product, 201);
    }

    // Update product
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);
        return response()->json($product);
    }
    
    // Delete product
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['Product was delited with succcess']);
    }
    
}
      

