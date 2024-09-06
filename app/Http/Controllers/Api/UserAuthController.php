<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->headers->set('Accept', 'application/json');
        $registerUserData = $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|string|max:12',
            'address' => 'required|string|max:1024',
            'city' => 'required|string|max:255',
            'code_post' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => ['required', 'string', 'min:1', 'confirmed']
        ]);
        $address = Address::create([
       'address' =>     $registerUserData['address'],
          'city' =>  $registerUserData['city'],
          'mail_code' =>  $registerUserData['code_post'],
        ]);
        $user = User::create([
            'name' => $registerUserData['name'],
            'email' => $registerUserData['email'],
            'mobile' => $registerUserData['mobile'],
            'password' => Hash::make($registerUserData['password']),
        ]);
        $token = $user->createToken($user->name . '-AuthToken')->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $user,
        ]);
    }
    public function login(Request $request)
    {
        $loginUserData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|min:1'
        ]);
        $user = User::where('email', $loginUserData['email'])->first();
        if (!$user || !Hash::check($loginUserData['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid Credentials'
            ], 401);
        }
        $token = $user->createToken($user->name . '-AuthToken')->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $user,
        ]);
    }
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            "message" => "logged out"
        ]);
    }
}
