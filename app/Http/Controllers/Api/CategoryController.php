<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ptype_seller;
use App\Http\Resources\PaginateResource;
use App\Http\Resources\ProductResource;

class CategoryController extends Controller
{
    public function get()
    {
        $categories = Category::all();
        return response()->json(
            [
            'categories' => $categories,
        ]
        );
    }
    public function get_products(Request $request)
    {
        $categoryId = $request->input('categoryId');
        $products = ProductResource::collection(ptype_seller::whereHas('ptype', function ($query) use ($categoryId) {
            $query->where('category_id', $categoryId);
        })->paginate(9));
        return response()->json(
            [
                'products' => PaginateResource::make($products)
            ]
        );
    }
}
