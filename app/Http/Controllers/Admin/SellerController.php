<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\User;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = Seller::orderBy('id', 'desc')->paginate(10);
        return view('admin.seller.index', compact("sellers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.seller.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'user_id' => 'exists:users,id|required',
            'card' => 'required|max:12',
           'shaba' => 'required|max:24'
        ]);

        $user = User::findOrFail($request->user_id);
        $user->is_seller = true;
        $user->update();
        Seller::create($validated);
        return to_route('sellers.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        return view('admin.seller.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller)
    {
        $users = User::all();
        return view('admin.seller.update', compact('users', 'seller'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seller $seller)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'user_id' => 'exists:users,id|required',
            'card' => 'required|max:12',
           'shaba' => 'required|max:24'
        ]);
        $seller->update($validated);
        return to_route('sellers.index')->with('success', true);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function suspension(Seller $seller)
    {
        if($seller->is_active) {
            $seller->is_active = 0;
        } else {
            $seller->is_active = 1;
        }
        $seller->update();
        return to_route('sellers.index');
    }

}
