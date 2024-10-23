<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


// Registration function by API created by pooria bashir
class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $create = $request->only('name', 'email');
        $create['password']= Hash::make($request['password']);
        $user = User::create($create);
        if ($user) {
            $token =$user->createToken('register')->plainTextToken;
            return response()->json([
                'success'=>true,
                'data'=> $token,
                'message'=>'user registered successfully',
                'user'=>$user->only('name','email', 'created_at')
            ]);
        }
        else
            return response()->json([
                'success'=>false,
                'message'=>'user not registered successfully',

            ],
                status: 422
            );

    }
}

