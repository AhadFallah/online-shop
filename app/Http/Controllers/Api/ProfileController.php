<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $request->headers->set('Accept', 'application/json');
        $user = auth()->user();
        return response()->json([
        "user" => $user
        ]);

    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            "name" => "string|max:255",
            "email" => "string|max:255",
            "mobile" => "string|max:255",
            "address" => "string",
            "city" => "string|max:255",
            'mail_code' => "string|max:10"

        ]);
        $user = auth()->user();

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile' => $validated["mobile"]
            ]);
        return response()->json([
            'success' => true,
            'user'=>$user
        ]);

    }
}
