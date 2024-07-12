<?php
// app/Modules/Auth/Repositories/AuthRepository.php

namespace App\Modules\Auth\Repositories;

use App\Models\User;

class AuthRepository
{
    public function createUser($data)
    {
        return User::create($data);
    }

    public function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }
}
