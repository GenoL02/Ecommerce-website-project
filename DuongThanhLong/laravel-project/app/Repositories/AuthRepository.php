<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class AuthRepository
{
    public function register(array $data)
    {
        $user = User::create($data);
        return $user;
    }

    public function login(array $credentials)
    {
        if (auth()->attempt($credentials)) {
            return auth()->user();
        }
        return null;
    }
    public function forgotPassword(string $email)
    {
        $user = User::where('email', $email)->first();

        if (!$user) {
            return;
        }

        $token = Str::random(60);

        $user->update(['password_reset_token' => $token]);

        return $user;
    }

    public function resetPassword(string $token, string $password)
    {
        $user = User::where('password_reset_token', $token)->first();

        if (!$user) {
            return;
        }

        $user->update(['password' => bcrypt($password), 'password_reset_token' => null]);

        return $user;
    }
    public function revokeUserTokens(User $user)
    {
        $user->tokens->each(function ($token) {
            $token->delete();
        });
    }
}
