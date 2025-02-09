<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
            if ($validator->fails()) return $this->validationFail($validator);

            if (!Auth::attempt($request->only('email', 'password'))) {
                return $this->returnJson(
                    null, 401,
                    message: 'Email atau kata sandi salah'
                );
            }
            $user = User::where('email', $request['email'])->firstOrFail();

            $token = $user->createToken('auth_token')->plainTextToken;

            return $this->returnJson(
                ['user' => $user, 'access_token' => $token],
                200,
                'Login Berhasil!'
            );
        } catch(\Exception $exception){
            return $this->returnJson(
                code: 500,
                message: 'Login Gagal! ' . $exception->getMessage()
            );
        }
    }

    public function logout(Request $request): JsonResponse
    {
        try {
            $request->user()->currentAccessToken()->delete();

            return $this->returnJson(
                code: 200,
                message: 'Logout Berhasil! '
            );

        } catch(\Exception $exception){
            return $this->returnJson(
                code: 500,
                message: 'Logout Gagal! ' . $exception->getMessage()
            );
        }
    }
}
