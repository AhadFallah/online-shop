<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::orderBy('id', 'desc');
        $categories = $categories->filter(request(
            [
                'search',
                'category_id'

            ]
        ))->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->category_id == 0) {

            $request->merge(['category_id' => null]);
        }
        $validated = $request->validate([
            'name' => 'string|max:255|required',
            'description' => 'string|max:500|required',
            'category_id' => 'nullable|exists:categories,id'
        ]);
        Category::create($validated);
        return to_route('categories.index')->with('success', true);
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
    public function edit(Category $category)
    {
        $categories = Category::where('id', '!=', $category->id)->get();
        return view('admin.category.update', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if($request->category_id == 0) {

            $request->merge(['category_id' => null]);
        }
        $validated = $request->validate([
            'name' => 'string|max:255|required',
            'description' => 'string|max:500|required',
            'category_id' => 'nullable|exists:categories,id'
        ]);
        $category->update($validated);
        return to_route('categories.index')->with('success', true);

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index')->with('success', true);
    }
}
