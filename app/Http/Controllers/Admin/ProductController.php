<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ptype;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Ptype::orderBy('id', 'desc')->with('category');
        $products = $products->filter(request([
           'search'
        ]))->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        $string = '{
"example":"value",
"example":"value"
    }';
        return view('admin.product.create', compact('categories', 'string'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|max:255|required',
            'description' => 'string|required',
            'category_id' => 'exists:categories,id|required',
            'context' => 'json|required'
        ]);
        Ptype::create($validated);

        return to_route('products.index')->with('success', true);
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
    public function edit(Ptype $product)
    {
        $categories = Category::all();
        return view('admin.product.update', compact('categories', 'product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ptype $product)
    {
        $validated = $request->validate([
            'name' => 'string|max:255|required',
            'description' => 'string|required',
            'category_id' => 'exists:categories,id|required',
            'context' => 'json|required'
        ]);
        $product->update($validated);
        return to_route('products.index')->with('success', true);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
