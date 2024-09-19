<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('name');
        $products = Product::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'LIKE', "%{$query}%");
        })->paginate(10);

        return response()->json(['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'error_code' => 404,
                'error_message' => 'Товар не найден'
            ], 404);
        }

        return response()->json($product);
    }
}
