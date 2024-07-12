<?php
// app/Modules/Auth/Services/AuthService.php

namespace App\Modules\Auth\Services;

use App\Modules\Auth\Repositories\AuthRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register($data)
    {
        return $this->authRepository->createUser($data);
    }

    public function login($credentials)
    {
        $user = $this->authRepository->findUserByEmail($credentials['email']);

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('auth_token')->plainTextToken;
    }

    public function logout($user)
    {
        $user->currentAccessToken()->delete();
    }
}
