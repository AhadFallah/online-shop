<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:255',
            'suggest' => 'required|in:1,2,3',
            'ptype_seller_id' => 'required|exists:ptype_seller,id'
        ]);
        $user = auth('sanctum')->user();
        $comment = $user->comments()->create($validated);
        return response()->json([
            'success' => true
        ]);
    }
}
