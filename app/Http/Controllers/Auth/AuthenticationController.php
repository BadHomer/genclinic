<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegistrationRequest;
use App\Services\AuthenticationService;
use Auth;
use Illuminate\Http\Request;
use Str;

class AuthenticationController extends Controller
{
    public AuthenticationService $authenticationService;

    public function __construct()
    {
       $this->authenticationService = new AuthenticationService();
    }

    public function register(UserRegistrationRequest $request)
    {
        $plainTextToken = $this->authenticationService->register($request);

        return response(['token' => $plainTextToken]);
    }

    public function login(UserLoginRequest $request)
    {
        $loginData = $request->validated();

        $plainTextToken = $this->authenticationService->login($loginData);

        return response(['token' => $plainTextToken]);
    }

    public function logout()
    {
        if(!$this->authenticationService->logout()) {
            return response(['status' => 'failed', 'error' => ['user' => 'not found']]);
        }

        return response(['status' => 'success']);

    }
}
