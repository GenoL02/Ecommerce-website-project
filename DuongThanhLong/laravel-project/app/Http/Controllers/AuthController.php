<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function register(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|confirmed',
            ]);

            $result = $this->authService->register($data);

            return response()->json([
                'message' => 'Register success',
                'user' => $result['user'],
                'token' => $result['token'],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = $request->user();
            $token = $user->createToken('myapptoken')->accessToken;

            return response()->json([
                'user' => $user,
                'token' => $token
            ]);
        }

        return response()->json([
            'error' => 'The provided credentials are incorrect.'
        ], 401);
    }
    public function forgotPassword(ForgotPasswordRequest $request, AuthService $authService)
    {
        $authService->forgotPassword($request->email);

        return response()->json([
            'message' => 'Email đặt lại mật khẩu đã được gửi.'
        ]);
    }
    public function resetPassword(ResetPasswordRequest $request, AuthService $authService)
    {
        $authService->resetPassword($request->token, $request->password);

        return response()->json([
            'message' => 'Mật khẩu đã được đặt lại thành công.'
        ]);
    }

    public function logout(Request $request)
    {
        try {
            $response = $this->authService->logout($request);
            return response()->json($response, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }
}

