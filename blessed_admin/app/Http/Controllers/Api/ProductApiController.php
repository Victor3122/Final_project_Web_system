<?php

// app/Http/Controllers/Api/ProductApiController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $products->map(function ($product) {
            $product->image_url = asset('uploads/images/' . $product->image);
            return $product;
        });
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $product->image_url = asset('uploads/images/' . $product->image);
        return $product;
    }


    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
