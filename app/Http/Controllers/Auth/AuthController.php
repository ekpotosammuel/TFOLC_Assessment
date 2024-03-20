<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
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
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 400);
        }
        return response()->json([
            'message' => 'registration successful',
            'data'    => $user
        ], 201);
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
            $credentials = $request->only('email', 'password');


            $resp = Auth::attempt($credentials);
            if (!$resp) {
                return response()->json([
                    'status' => 'Login Failed',
                    'message' => 'Invalid email/password',
                ], 401);
            }
            $user = Auth::user();

            $user = User::where('email', $request['email'])->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;


            return response()->json([
                "status" => "success",
                "access_token" => $token,
                "token_type" => 'Bearer',
                "user" => $user
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 400);
        }
    }


    public function logout(Request $request)
    {

        session()->flush();
        session()->put('is_login', false);
        return redirect('api/login');
    }
}
