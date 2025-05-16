<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash; // <-- ini yang penting
use App\Models\User;


class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        // Coba cari user berdasarkan username dan email
        $user = User::where('username', $request->username)
                    ->where('email', $request->email)
                    ->first();

                    if (!$user || !Hash::check($request->password, $user->password)) {
                        return response()->json([
                            'message' => 'Username, Email, atau Password salah.'
                        ], 401);
                    }

        // Autentikasi berhasil
        return response()->json([
            'message' => 'Login berhasil',
            'user' => $user,
        ]);
    }
}
