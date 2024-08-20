<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HeroResource;
use App\Http\Resources\PaginateResource;
use App\Http\Resources\ProductResource;
use App\Models\Hero;
use App\Models\ptype_seller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = ptype_seller::orderBy('id', 'desc')->paginate(9);
        $hero = Hero::all();
        $products = ProductResource::collection($products);
        $hero = HeroResource::collection($hero);
        return  response()->json([
            'products' => PaginateResource::make($products),
            'heros' => $hero
        ]);
    }
}
