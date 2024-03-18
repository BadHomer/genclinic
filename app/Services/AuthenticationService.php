<?php

namespace App\Services;

use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use Auth;
use Hash;

class AuthenticationService
{
    public function register(UserRegistrationRequest $request): string
    {
        $userService = new UserService();

        $userData = $request->validated();

        $user = $userService->createUser($userData);

        return $user->createToken($userData['login'])->plainTextToken;
    }

    public function login(array $loginData): string
    {
        $user = User::firstWhere('login', $loginData['login']);

        return $user->createToken($loginData['login'])->plainTextToken;
    }

    public function logout() : bool
    {
        $user = Auth::guard('sanctum')->user();
        if($user === null) {
            return false;
        }
        $user?->tokens()->where('id', $user?->currentAccessToken()->id)->delete();
        return true;
    }
}
