<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;

class CreateUserService
{
    public function create(array $data)
    {
        $email = $data['email'];

        $verify = User::where('email', $email)->first();

        if ($verify) {
            return response()->json(['message' => "Esse email já existe"], 400);
        }

        return User::create($data);
    }
}
