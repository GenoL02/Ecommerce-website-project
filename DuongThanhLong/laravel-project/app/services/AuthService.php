<?php

namespace App\Services;

use App\Repositories\AuthRepository;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AuthService
{
    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register(array $data)
    {
        return $this->authRepository->register($data);
    }

    public function login(array $credentials)
    {
        return $this->authRepository->login($credentials);
    }
    public function forgotPassword(string $email)
    {
        $user = $this->authRepository->forgotPassword($email);

        if (!$user) {
            return;
        }

        $url = route('reset.password', ['token' => $user->password_reset_token]);

        Mail::send('emails.forgot-password', ['user' => $user, 'url' => $url], function ($message) use ($user) {
            $message->to($user->email)->subject('Đặt lại mật khẩu');
        });

        return response()->json([
            'message' => 'Email đặt lại mật khẩu đã được gửi.'
        ]);
    }

    public function resetPassword(string $token, string $password)
    {
        $user = $this->authRepository->resetPassword($token, $password);

        if (!$user) {
            return response()->json([
                'message' => 'Token đặt lại mật khẩu không hợp lệ.'
            ], 404);
        }

        return response()->json([
            'message' => 'Mật khẩu đã được đặt lại thành công.'
        ]);
    }
    public function logout(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $this->authRepository->revokeUserTokens($user);
            return ['message' => 'Successfully logged out'];
        }

        throw new \Exception('User not found.', 401);
    }
}
