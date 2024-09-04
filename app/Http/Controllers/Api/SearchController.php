<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaginateResource;
use App\Http\Resources\ProductResource;
use App\Models\ptype_seller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $products = ptype_seller::orderBy('id', 'desc')->where("name", "like", "%".$request->input('search')."%")->paginate(9);
        $products = ProductResource::collection($products);
        return  response()->json([
            'products' => PaginateResource::make($products),
        ]);
    }
}
