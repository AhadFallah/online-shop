<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ptype;
use App\Models\ptype_seller;
use App\Models\Seller;

class ProductSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ptype_seller::orderBy('id', 'desc');
        $products = $products->filter(request([
            'search',
        ]))->paginate(10);
        return view('admin.product_seller.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sellers=Seller::all();
        $ptypes=Ptype::all();
        return view('admin.product_seller.create',compact('sellers','ptypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'ptype_id' => 'required|exists:ptype,id',
            'price' => 'required',
            'size' => 'string|nullable|max:100',
            'color' => 'string|nullable|max:100',
            'commission' => 'required',
            'seller_id' => 'required|exists:sellers,id',
            'number' => 'required',
            'context' => 'json|required',
            'file_id' => "required",
        ]);

        $productSeller =   ptype_seller::create($validated);
        $validated['file_id'] = explode(',', $validated['file_id']);
        foreach ($validated['file_id'] as $file) {
            $productSeller->files()->attach($file);
        }
        return to_route('sellerProducts')->with('success',true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
