<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $create = $request->only('name', 'email');
        $create['password'] = Hash::make($request['password']);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $create['photo'] = $path;
        }

        $user = User::create($create);

        if ($user) {
            $token = $user->createToken('register')->plainTextToken;
            return response()->json([
                'success' => true,
                'data' => $token,
                'message' => 'User registered successfully',
                'user' => $user->only('name', 'email', 'photo', 'created_at')
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not registered successfully',
            ], 422);
        }
    }
}
