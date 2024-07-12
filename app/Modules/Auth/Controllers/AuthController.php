<?php
// app/Modules/Auth/Controllers/AuthController.php

namespace App\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function registerview()
    {
        return view('auth/pages/register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = $this->authService->register($request->all());

        return response()->json(['message' => 'User registered successfully']);
    }

    public function loginview()
    {
        return view('auth/pages/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $token = $this->authService->login($request->only('email', 'password'));

        return response()->json(['access_token' => $token, 'token_type' => 'Bearer']);
    }

    public function logout(Request $request)
    {
        $this->authService->logout($request->user());

        return response()->json(['message' => 'User logged out successfully']);
    }

    public function forgotpasswordview()
    {
        return view('auth/pages/forgotpassword');
    }
    public function resetpasswordview()
    {
        return view('auth/pages/resetpassword');
    }
}
