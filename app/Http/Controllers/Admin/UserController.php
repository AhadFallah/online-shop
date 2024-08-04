<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::latest();
        // if(!auth()->user()->is_admin) {
        //     $users = $users->where('is_admin', false);
        // }
        $users = $users->filter(request([
               'is_active',
               'is_admin',
               'is_staff',
               'is_seller',
               'search',
           ]))->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function suspension(User $user)
    {
        if($user == auth()->user()) {
            return to_route('users.index')->with('self_error', true);
        }
        if($user->is_active) {
            $user->is_active = 0;
        } else {
            $user->is_active = 1;
        }
        $user->update();
        return to_route('users.index');
    }
}
