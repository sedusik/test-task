<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('name');
        $categories = Category::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'LIKE', "%{$query}%");
        })->get();

        return response()->json(['categories' => $categories]);
    }
}
