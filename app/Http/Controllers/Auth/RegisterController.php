<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name'              =>  'required',
            'email'             =>  'required|email|unique:users',
            'password'          =>  'required',
        ]);
        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
        ]);


        return response()->json([
            'message' => 'registration successful',
            'data'    => $user
        ], 201);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;


        return response()->json([
            "status" => "success",
            "access_token" => $token,
            "token_type" => 'Bearer',
            "user" => $user
        ]);
    }


    public function logout(Request $request)
    {

        session()->flush();
        session()->put('is_login', false);
        return redirect('api/login');
    }
}
