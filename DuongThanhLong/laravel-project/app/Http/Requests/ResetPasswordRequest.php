<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'token' => 'required|string',
            'password' => 'required|string|confirmed|min:8',
        ];
    }
}
